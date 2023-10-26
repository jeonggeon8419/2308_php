// 1.DOM ( Document Object Model ) 이란? 교제 p.679
// - 웹 문서를 제어하기 위해서 웹 문서를 객체화한 것
// - DOM API를 통해서 HTML의 구조나 내용 또는 스타일등을 동적으로 조작가능


//2. 요소 선택
// 2-1. 고유한 ID로 요소를 요소를 선택
const TITLE = document.getElementById('title');
TITLE.style.color = 'blue';
TITLE.style.fontSize = '100px';
const SUB = document.getElementById('subtitle');
SUB.style.backgroundColor = '#f5f5dc';

// 2-2. 태그명으로 요소를 선택 (해당 요소들을 컬랙션 객체로 가져온다.)
const H2 = document.getElementsByTagName('h2');
H2[0].style.color = 'red';


// 2-3. 클래스로 요소를 선택
const NONE = document.getElementsByClassName('none-li');

// 2-4. css 선택자를 사용해 요소를 찾는 매소드
//  querySelector() : 복수일경우 가장 첫번째 요소만 선택
const S_ID = document.querySelector('#subtitle2');
const S_NONE = document.querySelector('.none-li');

//querySelectorAll() : 복수의 요소라면 전부 선택
const S_NONE_All = document.querySelectorAll('.none-li');

// --------
// 요소 조작
// --------
// textContent = 순수한 텍스트 데이터를 전달, 이전의 태그들은 모두 제거

TITLE.textContent = '탕수육';

// innerHTML : 태그는 태그로 인식해서 전달, 이전의 태그들은 모두 제거
// TITLE.innerHTML = '<p>쩡건</p>';

// setAttribute('','') : 요소에 속성을 추가
// const TEXT = document.querySelector('input');
// TEXT.setAttribute('placeholder','입력하시오');
const INTXT = document.getElementById('intxt');
INTXT.placeholder = '입력하시오';

// removeAttribute('') : 요소의 속성을 제거
// INTXT.removeAttribute('placeholder');

// --------------
// 4. 요소 스타일링
// style : 인라인으로 스타일 추가
TITLE.style.color = 'red';

// classList : 클래스로 스타일 추가
// TITLE.classList.add('class1','class2','class3');
// TITLE.classList.remove('class', 'class3');
