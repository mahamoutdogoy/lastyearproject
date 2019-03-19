
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<style type="text/css">
	body {
  font-family: "Open Sans", sans-serif;
  width: 100%;
  height: 100%;
  margin: 0;
  padding: 0;
  background: #F8F8F8;
  font-size: 1em;
  line-height: 1.48;
}

h1, h2, h3, h4, h5, h6 {
  font-family: "Comfortaa", cursive;
  font-weight: bolder;
}

h1 {
  font-size: 2em;
  margin: 0.7em 0;
}

h2 {
  font-size: 1.5em;
  margin: 0.8em 0;
}

h3 {
  font-size: 1.17em;
  margin: 0.83em 0;
}

h4 {
  font-size: 1em;
  margin: 0.83em 0;
}

h5 {
  font-size: 0.83em;
  margin: 1.5em 0;
}

h6 {
  font-size: 0.75em;
  margin: 1.67em 0;
}

.header {
  position: relative;
  background: #F8F8F8;
  padding: 0 1em;
  border-bottom: solid 3px #E5E5E5;
  margin-bottom: 1em;
  transition: height ease 400ms;
}
.header--logo {
  width: 2.5em;
  height: 2.5em;
  margin: 0.5em 0;
}

.intro {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  height: 100%;
  text-align: center;
  z-index: 1030;
  padding: 1em;
  transition-delay: 400ms;
  justify-content: flex-start;
  overflow-y: scroll;
}
.intro button {
  background: #EE7B7A;
  border: 0;
  padding: 0.5em 2em;
  border-radius: 10px;
  color: white;
  transition: ease 300ms;
}
.intro button:hover {
  background: tomato;
  cursor: pointer;
}

.header--logo__large {
  width: 13em;
  height: 13em;
}
@media only screen and (min-width: 992px) {
  .header--logo__large {
    width: 15em;
    height: 15em;
  }
}

.quiz {
  display: flex;
  flex-direction: column;
  background: white;
  border-radius: 8px;
  box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.2);
  margin: 0.7em;
}
.quiz img {
  border-radius: 0 8px 8px 0;
}
@media only screen and (min-width: 992px) {
  .quiz {
    flex-direction: row;
    max-width: 1280px;
    margin: 0 auto;
    min-height: 450px;
  }
}

.quiz__image {
  width: 100%;
  flex: 0 auto;
  order: 2;
}
@media only screen and (min-width: 992px) {
  .quiz__image {
    width: 100%;
    height: auto;
    flex: 0 0 500px;
  }
}
.quiz__image img {
  width: 100%;
  height: 100%;
}

.quiz__wrapper {
  display: flex;
  flex-direction: column;
  padding: 1em;
  flex: 0 auto;
}
@media only screen and (min-width: 992px) {
  .quiz__wrapper {
    flex: 1 1 auto;
    padding: 3em;
  }
}

.quiz__question {
  min-height: 120px;
}

.quiz__answer {
  display: flex;
  flex-direction: column;
}
.quiz__answer--item {
  background: white;
  color: #191919;
  border: solid 5px #efefef;
  border-radius: 0.5em;
  padding: 0.5em 0;
  margin-bottom: 1em;
  font-size: 1.15em;
  transition: ease 300ms;
  outline: none;
}
.quiz__answer--item:hover, .quiz__answer--item:focus {
  border: solid 5px #84B5DC;
  cursor: pointer;
}
.quiz__answer--item:active {
  outline: none;
  transform: translateY(2px);
}

.result {
  display: flex;
  flex-direction: column;
  background: white;
  border-radius: 8px;
  box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.2);
  margin: 0.7em;
}
@media only screen and (min-width: 992px) {
  .result {
    flex-direction: row;
    max-width: 1280px;
    margin: 0 auto;
    min-height: 450px;
  }
}
@media only screen and (min-width: 992px) {
  .result {
    padding: 0;
    flex-direction: row;
  }
}
.result__image {
  width: 100%;
  flex: 0 auto;
  order: 2;
}
@media only screen and (min-width: 992px) {
  .result__image {
    width: 100%;
    height: auto;
    flex: 0 0 500px;
  }
}
.result__image img {
  width: 100%;
  height: 100%;
}
.result__text {
  display: flex;
  flex-direction: column;
  padding: 1em;
  flex: 0 auto;
}
@media only screen and (min-width: 992px) {
  .result__text {
    flex: 1 1 auto;
    padding: 3em;
  }
}

.result__button {
  display: block;
  border: 0;
  padding: 0.5em 0;
  margin-bottom: 1em;
  outline: none;
  color: white;
  transition: ease 300ms;
  width: 100%;
}
.result__button:hover {
  opacity: 0.9;
}
@media only screen and (min-width: 992px) {
  .result__button {
    width: 400px;
    margin-bottom: 1em;
  }
}
.result__button--facebook {
  background: #3b5998;
}
.result__button--twitter {
  background: #1dcaff;
}
.result__button:hover {
  cursor: pointer;
}

.fade-enter {
  opacity: 0.01;
}

.fade-enter-active {
  opacity: 1;
  transition: all 400ms ease-in-out;
}

.fade-exit {
  opacity: 1;
  display: none;
}

.fade-exit-active {
  opacity: 0.01;
  display: none;
  transition: all 400ms ease-in;
}

.fade-in {
  animation: fade-in ease 600ms;
}

@keyframes fade-in {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

	
	
</style>
<body>
<div id="app"></div>
</body>
</html>
<script type="text/javascript">
	
	function _defineProperty(obj, key, value) {if (key in obj) {Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true });} else {obj[key] = value;}return obj;}const Component = React.Component;
const Transition = ReactTransitionGroup.Transition;
const TransitionGroup = ReactTransitionGroup.TransitionGroup;
const CSSTransition = ReactTransitionGroup.CSSTransition;

class Quiz extends React.Component {
  constructor(props) {
    super(props);_defineProperty(this, "triggerAnimation",



















    bool => {
      this.setState({
        animate: bool });

    });_defineProperty(this, "getAnswer",

    (e, answer) => {
      console.log(
      answer === this.state.list[this.state.id].final,
      this.state.answer);

      this.setState({
        answer: [
        ...this.state.answer,
        answer === this.state.list[this.state.id].final],

        id: this.state.next,
        next: this.state.next + 1,
        finish: this.state.next + 1 > this.state.totalQuestion });


      window.scroll(0, 0);
    });this.state = { id: 0, answer: [], totalQuestion: 0, list: [], next: 1, finish: false, animate: true };}componentDidUpdate(prevProps, prevState) {if (this.state.id !== prevState.id) {this.setState({ animate: true });}}

  componentDidMount() {
    fetch(
    "https://raw.githubusercontent.com/snowleo208/100-Days-of-Code/master/9.%20Quiz/src/data.json").

    then(data => data.json()).
    then(json => {
      this.setState({
        list: json,
        totalQuestion: json.length });

    });
  }

  render() {
    return !this.state.finish && this.state.list.length > 0 ?
    React.createElement(React.Fragment, null,
    React.createElement(Header, null),
    React.createElement("section", { className: "quiz" },
    React.createElement("div", { className: "quiz__image" },
    React.createElement("img", {
      src: `https://snowleo208.github.io/100-Days-of-Code/9.%20Quiz/assets/q${
      this.state.id + 1 < 10 ?
      "0" + (this.state.id + 1) :
      this.state.id + 1
      }.jpg`,
      alt: "",
      className: this.state.animate ? "fade-in" : "" })),


    React.createElement("div", { className: "quiz__wrapper" },
    React.createElement("div", { className: "quiz__question" },
    React.createElement("h2", null,
    this.state.list && this.state.list[this.state.id]["question"])),



    React.createElement(TransitionGroup, { className: "quiz__answer" },
    this.state.list &&
    this.state.list[this.state.id]["answer"].map((item, index) => {
      const delay = Math.max(0, index * 100);
      return (
        React.createElement(CSSTransition, {
          key: "a" + this.state.id + " " + item,
          timeout: 400,
          classNames: "fade",
          unmountOnExit: true,
          onExited: () => {
            this.triggerAnimation(false);
          } },

        React.createElement("button", {
          onClick: e => this.getAnswer(e, index),
          key: "a" + this.state.id + " " + item,
          className: "quiz__answer--item",
          style: { transitionDelay: `${delay}ms` } },

        item)));



    }))))) :






    React.createElement(React.Fragment, null,
    React.createElement(Header, null),
    React.createElement(Result, {
      answer: this.state.answer.filter(item => item === true).length,
      totalQuestion: this.state.totalQuestion }));



  }}


class Header extends React.Component {
  constructor(props) {
    super(props);_defineProperty(this, "isStart",




    () => {
      this.setState(prevState => {
        return {
          start: !prevState.start };

      });
      window.scroll(0, 0);
    });this.state = { start: false };}
  render() {
    return (
      React.createElement("header", { className: !this.state.start ? "header intro" : "header fade-in" },
      React.createElement("div", null,
      React.createElement("img", {
        src: "https://snowleo208.github.io/100-Days-of-Code/9.%20Quiz/assets/coffee-cup.svg",
        alt: "Logo",
        className:
        !this.state.start ? "header--logo__large fade-in" : "header--logo" }),


      !this.state.start ?
      React.createElement(React.Fragment, null,
      React.createElement("h1", null, "What is food, really?"),
      React.createElement("p", null, "This food and drink trivia let you know more about your knowledge of food!"),



      React.createElement("button", { onClick: this.isStart }, "Start")) :


      "")));




  }}


class Result extends React.Component {
  constructor(props) {
    super(props);_defineProperty(this, "share",

    media => {
      console.log(media);
      const text = `I have finished this food quiz and get ${
      this.props.answer
      } out of ${this.props.totalQuestion}!`;
      const url = "https://codepen.io/snowleo208/pen/WajvaJ";
      console.log(encodeURIComponent(text));
      switch (media) {
        case "twitter":
          window.open(
          `http://twitter.com/share?text=${encodeURIComponent(
          text)
          }&url=${encodeURIComponent(url)}&hashtags=quiz,food`);

          break;
        case "facebook":
          window.open(
          `https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(
          url)
          }&t=${encodeURIComponent(text)}`);

          break;
        default:
          break;}

    });}
  render() {
    return (
      React.createElement(React.Fragment, null,
      React.createElement("section", { className: "result fade-in" },
      React.createElement("div", { className: "result__image" },
      React.createElement("img", {
        src: "https://snowleo208.github.io/100-Days-of-Code/9.%20Quiz/assets/result-tanya-patrikeyeva-423820-unsplash.jpg",
        alt: "Thank you for answering this quiz!" })),


      React.createElement("div", { className: "result__text" },
      React.createElement("h1", null, "Your Results"),
      React.createElement("p", null, "You get ",
      React.createElement("strong", null, this.props.answer), " out of",
      React.createElement("strong", null, " ", this.props.totalQuestion, " "), "! Well done!"),


      React.createElement("button", {
        className: "result__button result__button--twitter",
        onClick: () => this.share("twitter") }, "Share in Twitter"),



      React.createElement("button", {
        className: "result__button result__button--facebook",
        onClick: () => this.share("facebook") }, "Share in Facebook")))));







  }}


class App extends React.Component {
  render() {
    return React.createElement(Quiz, null);
  }}


ReactDOM.render(React.createElement(App, null), document.getElementById("app"));
</script>