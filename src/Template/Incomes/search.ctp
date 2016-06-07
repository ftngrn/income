<?php
use Cake\I18n\Date;
use App\Model\Entity\Income;

$this->extend('../Layout/bootstrap-ui/dashboard');

$week_day = ['日', '月', '火', '水', '木', '金', '土'];
$this->assign('title', '園児検索');
$this->assign('page_header', '園児検索');
?>
<div class="row Incomes view large-12 medium-12 columns content">
	<div id="search-container">
	</div>
</div>

<!-- Income用のCSS,JS -->
<?= $this->Html->script([
			'https://cdnjs.cloudflare.com/ajax/libs/react/15.0.2/react.min.js',
			'https://cdnjs.cloudflare.com/ajax/libs/react/15.0.2/react-dom.min.js',
			'https://cdnjs.cloudflare.com/ajax/libs/babel-core/5.8.23/browser.min.js'
]) ?>
<?= $this->Html->scriptStart(['block' => true, 'type' => 'text/babel']) ?>
var children = {};
var Searcher = React.createClass({
	loadChildren: function() {
		$.ajax({
			url: this.props.url,
			dataType: 'json',
			cache: false,
			success: function(data) {
				children = data;
			}.bind(this),
			error: function(xhr, status, err) {
				console.error(this.props.url, status, err.toString());
			}.bind(this)
		});
	},
	getInitialState: function() {
		return {
			data: {},
			child: {}
		};
	},
	componentDidMount: function() {
		this.loadChildren();
	},
	openIncomePanel: function(child) {
		this.setState({child: child});
	},
	closeIncomePanel: function(child) {
		this.setState({child: {}});
	},
	doReset: function() {
		this.setState({data: {}});
		$('input[name=kana]:checked').removeAttr('checked');
		$('input[name=room]:checked').removeAttr('checked');
		$('input[name=course]:checked').removeAttr('checked');
		$('input[name=school]:checked').removeAttr('checked');
		$('input[name=sex]:checked').removeAttr('checked');
		$('input[name=birthday]:checked').removeAttr('checked');
	},
	doSearch: function(e) {
		//フォームの値を一括取得したいので仕方なくjQueryを使う
		//Reactでこれを実現する方法が不明なため
		var kana = $('input[name=kana]:checked').val();
		var room = $('input[name=room]:checked').val();
		var course = $('input[name=course]:checked').val();
		var school = $('input[name=school]:checked').val();
		var sex = $('input[name=sex]:checked').val();
		var mon = $('input[name=birthday]:checked').val();
		var monp = "";
		if (mon > 0) {
			monp = ('00' + mon).slice(-2);
		}
		console.log(kana,room,course,school,sex,mon,monp);

		var regexp = "";
		if (kana === 'ALL' && room === 'ALL' && course === 'ALL' && school === 'ALL' && sex === 'ALL' && mon === 'ALL') {
			console.log("result = children");
			this.setState({data: children});
			return;
		}
		if (kana != "ALL" && kana != undefined) {
			regexp = regexp + "^" + kana;
		}
		if (room != "ALL" && room != undefined) {
			regexp = regexp + "(.*)" + "CR" + room + " ";
		}
		if (course != "ALL" && course != undefined) {
			regexp = regexp + "(.*)" + "BC" + course + " ";
		}
		if (school != "ALL" && school != undefined) {
			regexp = regexp + "(.*)" + "SC" + school + " ";
		}
		if (sex != "ALL" && sex != undefined) {
			regexp = regexp + "(.*)" + "SE" + sex + " ";
		}
		if (mon != "ALL" && mon != undefined) {
			regexp = regexp + "(.*)" + "BD" + monp;
		}
		console.log("regexp:[" + regexp + "]");

		//検索
		var result = {};
		$.each(children, function (_summary, obj) {
			if (_summary.search(new RegExp(regexp)) != -1) {
				result[_summary] = obj;
			}
		});
		this.setState({data: result});
	},
	render: function() {
		console.log("Root render:", this.state);
		return (
			<div className="searcher">
				<SearchForm onClick={this.doSearch} onReset={this.doReset} data={this.state.data} />
				<SearchResult data={this.state.data} openIncomePanel={this.openIncomePanel} />
				<IncomePanel child={this.state.child} closeIncomePanel={this.closeIncomePanel} url={this.props.incomeUrl} />
			</div>
		);
	}
});
var SearchForm = React.createClass({
	render: function() {
		var count = Object.keys(this.props.data).length;
		return (
			<div className="search-form">
				<BirthdayList onClick={this.props.onClick} />
				<SchoolList onClick={this.props.onClick} />
				<SexList onClick={this.props.onClick} />
				<RoomList onClick={this.props.onClick} />
				<CourseList onClick={this.props.onClick} />
				<KanaList onClick={this.props.onClick} />
				<button className="reset btn btn-xs btn-warning" onClick={this.props.onReset} >リセット</button>
				<div className="count">{count}</div>
			</div>
		);
	}
});
var KanaList = React.createClass({
	render: function() {
		var name = 'kana';
		var vars = ['ALL', <?= $capsStr ?>];
		var capList = [
			'あ','い','う','え','お',
			'か','き','く','け','こ',
			'さ','し','す','せ','そ',
			'た','ち','つ','て','と',
			'な','に','ぬ','ね','の',
			'は','ひ','ふ','へ','ほ',
			'ま','み','む','め','も',
			'や','ゆ','よ',
			'ら','り','る','れ','ろ',
			'わ','を','ん'
		];
		var inputs = vars.map(function (v, i) {
			var key = name + "-" + i;
			return (
				<div className={name} title={v}>
					<input type="checkbox" name={name} ref={name} id={key} defaultValue={v} onClick={this.props.onClick} />
					<label htmlFor={key} className="btn btn-xs btn-default">{v}</label>
				</div>
			);
		}, this);
		return (
			<div className={name + "List buttons"}>
				<h3>なまえ</h3>
				{inputs}
			</div>
		);
	}
});
var RoomList = React.createClass({
	render: function() {
		var name = 'room';
		var vars = ['ALL','うめ','もも','たんぽぽ','さくら','ちゅうりっぷ','ひまわり','ばら','すみれ'];
		var inputs = vars.map(function (v, i) {
			var key = name + "-" + i;
			return (
				<div className={name} title={v}>
					<input type="checkbox" name={name} ref={name} id={key} defaultValue={v} onClick={this.props.onClick} />
					<label htmlFor={key} className="btn btn-xs btn-default">{v}</label>
				</div>
			);
		}, this);
		return (
			<div className={name + "List buttons"}>
				<h3>クラス</h3>
				{inputs}
			</div>
		);
	}
});
var CourseList = React.createClass({
	render: function() {
		var name = 'course';
		var vars = ['ALL','緑','黄','黄緑','青','白','赤','オレンジ','ピンク','紫'];
		var inputs = vars.map(function (v, i) {
			var key = name + "-" + i;
			return (
				<div className={name} title={v}>
					<input type="checkbox" name={name} ref={name} id={key} defaultValue={v} onClick={this.props.onClick} />
					<label htmlFor={key} className="btn btn-xs btn-default">{v}</label>
				</div>
			);
		}, this);
		return (
			<div className={name + "List buttons"}>
				<h3>リボン</h3>
				{inputs}
			</div>
		);
	}
});
var SchoolList = React.createClass({
	render: function() {
		var name = 'school';
		var	vars = ['ALL','真駒内幼稚園','プチピヨランド'];
		var inputs = vars.map(function (v, i) {
			var key = name + "-" + i;
			return (
				<div className={name} title={v}>
					<input type="checkbox" name={name} ref={name} id={key} defaultValue={v} onClick={this.props.onClick} />
					<label htmlFor={key} className="btn btn-xs btn-default">{v}</label>
				</div>
			);
		}, this);
		return (
			<div className={name + "List buttons"}>
				<h3>所　属</h3>
				{inputs}
			</div>
		);
	}
});
var SexList = React.createClass({
	render: function() {
		var name = 'sex';
		var vars = ['ALL','男','女'];
		var inputs = vars.map(function (v, i) {
			var key = name + "-" + i;
			return (
				<div className={name} title={v}>
					<input type="checkbox" name={name} ref={name} id={key} defaultValue={v} onClick={this.props.onClick} />
					<label htmlFor={key} className="btn btn-xs btn-default">{v}</label>
				</div>
			);
		}, this);
		return (
			<div className={name + "List buttons"}>
				<h3>性　別</h3>
				{inputs}
			</div>
		);
	}
});
var BirthdayList = React.createClass({
	render: function() {
		var name = 'birthday';
		var vars = ['ALL',4,5,6,7,8,9,10,11,12,1,2,3];
		var inputs = vars.map(function (v, i) {
			var key = name + "-" + i;
			return (
				<div className={name} title={v}>
					<input type="checkbox" name={name} ref={name} id={key} defaultValue={v} onClick={this.props.onClick} />
					<label htmlFor={key} className="btn btn-xs btn-default">{v}</label>
				</div>
			);
		}, this);
		return (
			<div className={name + "List buttons"}>
				<h3>誕生月</h3>
				{inputs}
			</div>
		);
	}
});
var SearchResult = React.createClass({
	render: function() {
		var count = Object.keys(this.props.data).length;
		console.log("SearchResult:", count);
		var results = Object.keys(this.props.data).map(function (key) {
			var child = this.props.data[key];
			return (
				<Child info={child} key={child.id} openIncomePanel={this.props.openIncomePanel} />
			);
		}, this);
		return (
			<div className="results">
				{results}
			</div>
		);
	}
});
var Child = React.createClass({
	openIncomePanel: function() {
		this.props.openIncomePanel(this.props.info);
	},
	render: function() {
		//SafariではISO8601形式をDateに食わせられないのでYMDに変換
		var birthedYMD = this.props.info.birthed.split('T',1)[0];
		var birthed = new Date(birthedYMD.replace(/-/g,"/"));
		var photo = null;
		var photoClass = "photo";
		if (this.props.info.photos.length > 0) {
			photo = <img src={"/photos/thumbnail/" + this.props.info.photos[0].id} />
		}
		else {
			photoClass = photoClass + " none"
		}
		return (
			<div className="child info" data-bus={this.props.info.bus} data-course={this.props.info.course}>
				<div className={photoClass}>
					{photo}
				</div>
				<h3>{this.props.info.kana}</h3>
				<div className="name">{this.props.info.name}</div>
				<div className="sex">{this.props.info.sex}</div>
				<div className="birthed">{birthed.getFullYear()}/{birthed.getMonth() + 1}/{birthed.getDate()}</div>
				<ul className="info-container">
					<li className="room">{this.props.info.room}</li>
					<li className="bus">{this.props.info.bus}</li>
					<li className="course">{this.props.info.course}</li>
				</ul>
				<div className="open-income">
					<button className="btn btn-success" onClick={this.openIncomePanel}>出欠など連絡を追加する</button>
				</div>
			</div>
		);
	}
});
var IncomePanel = React.createClass({
	close: function() {
		this.props.closeIncomePanel(this.props.child);
	},
	submit: function() {
		//ここでAjaxリクエストする
		var data = {
			child: this.props.child,
			income: {
				come: this.refs.come.checked
			}
		};
		console.log("IncomePanel#submit", data);
		$.ajax({
			type: 'POST',
			url: this.props.url,
			dataType: 'json',
			data: data,
			cache: false,
			success: function(data) {
				console.log("IncomePanel#submit success!");
			}.bind(this),
			error: function(xhr, status, err) {
				console.error("IncomePanel#submit", this.props.url, status, err.toString());
			}.bind(this)
		});
	},
	render: function() {
		var cls = "income-panel";
		if (jQuery.isEmptyObject(this.props.child)) {
			cls = cls + " hide";
		}
		return (
			<div className={cls}>
				<h3>{"IncomePanel:" + this.props.child.kana}</h3>
				<button className="close-panel" onClick={this.close}>Close</button>
				<input type="checkbox" name="come" ref="come" id="income-come" />
				<label htmlFor="income-come">お迎え</label>
				<button className="submit" onClick={this.submit}>Submit</button>
			</div>
		);
	}
});
var IncomeForm = React.createClass({
	render: function() {
		var incomeTypes = <?= json_encode(Income::$TYPES) ?>;
		var name = 'income-type';
		var inputs = incomeTypes.map(function (type, i) {
			var cls = name + " " + type.key;
			var key = type.key + "-" + type.enum + "-" + this.props.info.id;
			return (
				<li className={cls} title={type.label}>
					<input type="checkbox" name={key} ref={cls} id={key} defaultValue={type.enum} onClick={this.props.onClickIncome} />
					<label htmlFor={key} className="">{type.short_label}</label>
				</li>
			);
		}, this);
		return (
			<ul className="income-types">
				{inputs}
			</ul>
		);
	}
});

ReactDOM.render(
	<Searcher url="/api/children.json" incomeUrl="/api/incomes" />,
	document.getElementById('search-container')
);
<?= $this->Html->scriptEnd() ?>

