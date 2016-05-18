<?php
use Cake\I18n\Date;
$this->extend('../Layout/bootstrap-ui/dashboard');

$week_day = ['日', '月', '火', '水', '木', '金', '土'];
$this->assign('title', '園児検索');
$this->assign('page_header', '園児検索');
?>

<div class="row Incomes view large-12 medium-12 columns content">
	<div class="income col-sm-12 col-md-12">
		<h2>主な活動</h2>
	</div>
	<div id="content">
	<div>
</div>

<!-- Income用のCSS,JS -->
<?= $this->Html->css(['income']) ?>
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
		return {data: {}};
	},
	componentDidMount: function() {
		this.loadChildren();
	},
	doReset: function() {
		this.setState({data: {}});
	},
	doSearch: function(e) {
		//フォームの値を一括取得したいので仕方なくjQueryを使う
		//Reactでこれを実現する方法が不明なため
		var room = $('input[name=room]:checked').val();
		var course = $('input[name=course]:checked').val();
		var kana = $('input[name=kana]:checked').val();
		var mon = $('input[name=mon]:checked').val();
		var sex = $('input[name=sex]:checked').val();
		var school = $('input[name=school]:checked').val();
		console.log("form:", room, course, kana, mon, sex, school);

		var regexp = "";
		if (room === 'ALL' && school === 'ALL') {
			console.log("result = children");
			this.setState({data: children});
			return;
		}
		if (room != "ALL" && room != undefined) {
			regexp = regexp + "(.*)" + "CR" + room + " ";
		}
		if (school != "ALL" && school != undefined) {
			regexp = regexp + "(.*)" + "SC" + school + " ";
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
		return (
			<div className="searcher">
				<SearchForm onClick={this.doSearch} onReset={this.doReset} />
				<SearchResult data={this.state.data} />
			</div>
		);
	}
});
var SearchForm = React.createClass({
	render: function() {
		return (
			<div>
				<RoomList onClick={this.props.onClick} rooms={['ALL','うめ','もも','たんぽぽ','さくら','ちゅうりっぷ','ひまわり','ばら','すみれ']} />
				<SchoolList onClick={this.props.onClick} schools={['ALL','真駒内幼稚園','プチピヨランド']} />
				<button onClick={this.props.onReset} >Reset!</button>
			</div>
		);
	}
});
var RoomList = React.createClass({
	render: function() {
		var inputs = this.props.rooms.map(function (room, i) {
			var key = "room-" + i;
			return (
				<div className="room">
					<input type="radio" name="room" ref="room" id={key} defaultValue={room} onClick={this.props.onClick} />
					<label htmlFor={key}>{room}</label>
				</div>
			);
		}, this);
		return (
			<div className="roomList">
				{inputs}
			</div>
		);
	}
});
var SchoolList = React.createClass({
	render: function() {
		var inputs = this.props.schools.map(function (school, i) {
			var key = "school-" + i;
			return (
				<div className="school">
					<input type="radio" name="school" ref="school" id={key} defaultValue={school} onClick={this.props.onClick} />
					<label htmlFor={key}>{school}</label>
				</div>
			);
		}, this);
		return (
			<div className="schoolList">
				{inputs}
			</div>
		);
	}
});
var SearchResult = React.createClass({
	render: function() {
		console.log("SearchResult:", Object.keys(this.props.data).length);
		var results = Object.keys(this.props.data).map(function (key) {
			var child = this.props.data[key];
			return (
				<Child info={child} key={child.id} />
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
	render: function() {
		return (
			<div className="child">
				<h3>{this.props.info.kana}</h3>
				{this.props.info.id}
			</div>
		);
	}
});

ReactDOM.render(
	<Searcher url="/api/children.json" />,
	document.getElementById('content')
);
<?= $this->Html->scriptEnd() ?>

