// メニュー展開時に背景を固定
const backgroundFix = (bool) => {
  const scrollingElement = () => {
    const browser = window.navigator.userAgent.toLowerCase();//ブラウザの種類を判定して返り値を全部小文字で返す
    if ("scrollingElement" in document) return document.scrollingElement;//ブラウザの種類が判定できたらその値を返す
    return document.documentElement;//それ以外はdocumentElementを返す
  };

  const scrollY = bool
    ? scrollingElement().scrollTop//boolがtrueの場合、スクロールした分のpxを取得
    : parseInt(document.body.style.top || "0");//boolがfalseの場合、bodyのtopの値を取得または0を返す(整数に変換)

  const fixedStyles = {//背景を固定するスタイル
    height: "100vh",
    position: "fixed",
    top: `${scrollY * -1}px`,//スクロールした分のpxの値をマイナスにしてbodyのtopに設定
    left: "0",
    width: "100vw"
  };

  // fixedStylesのプロパティを配列に取得して、一つずつ動的に置き換える
  Object.keys(fixedStyles).forEach((key) => {
    document.body.style[key] = bool ? fixedStyles[key] : "";//boolがtrueだったらfixedStylesのkeyを設定、そうじゃなければ何もしない
  });

  if (!bool) {//boolがfalseの場合
    window.scrollTo(0, scrollY * -1);//x軸とy軸を0に戻す
  }
};

// 変数定義
const CLASS = "is-active";
let flg = false;

let hamburger = document.getElementById("hamburger-button");//ハンバーガーボタン
let menu = document.getElementById("hamburger-menu");//メニューエリア
const closebtn = document.getElementById("close-button");
const header = document.querySelector("header");
const body = document.querySelector("body");

// メニューを開くと背景固定
hamburger.addEventListener("click", (e) => { //ハンバーガーボタンがクリックされたら
  e.currentTarget.classList.add(CLASS);//クリックされたハンバーガーボタンのクラスをつける
  menu.classList.add(CLASS);//メニューエリアのクラスをつける
  closebtn.classList.add(CLASS);//メニューエリアのクラスをつける
  header.classList.add(CLASS);//メニューエリアのクラスをつける
  body.classList.add(CLASS);//メニューエリアのクラスをつける
  
  if (flg) {// flg初期値falseの時
    backgroundFix(false);//x軸とy軸を0に戻す
    flg = false;//fragにfalseを代入
  } else {// flg初期値trueの時
    backgroundFix(true);//fixedatylesのスタイルを設定
    flg = true;//fragにtrueを代入
  }
});

// メニューを閉じる
closebtn.addEventListener("click", (e) => {
  e.currentTarget.classList.remove(CLASS);
  menu.classList.remove(CLASS);
  closebtn.classList.remove(CLASS);
  header.classList.remove(CLASS);
  body.classList.remove(CLASS);
  backgroundFix(false);
  flg = false;
})