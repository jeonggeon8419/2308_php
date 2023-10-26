// 1. 버튼을 클릭시 아래 내용의 알러트가 나옵니다.
	//"안녕하세요."
	//"숨어있는 div를 찾아보세요"
//2. 특정 영역에 마우스 포인터가 진입하면 아래 내용의 알러트가 나옵니다. 들킨 상태에서는 알러트가 안나옵니다.
//"두근두근"

//3. 2번의 영역을 클릭하면 아래의 알러트를 출력하고, 배경색이 베이지 색으로 바뀌어 나타납니다.
//"들켯다!"
//4. 3번의 상태에서 다시 한번더 클릭하면 아래의 알러트를 출력하고, 배경색이 흰색으로 바뀌어 안보이게 합니다
// 다시 숨는다.

const DIV = document.querySelector('#outdiv');
DIV.addEventListener('mouseenter', () => {
	 alert('도끼도끼'); 
});

const DIV1 = document.querySelector('#indiv');
DIV1.addEventListener('click', () => {
	alert('들켯다!');
	DIV1.style.backgroundColor = 'blue';
});