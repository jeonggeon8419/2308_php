<template>
  <img alt="Vue logo" src="./assets/logo.png">
  <!-- 헤더 -->
  <div class="nav">
    <!-- <a href="#">홈</a>
    <a href="#">상품</a>
    <a href="#">기타</a> -->
    <!-- 반복문 -->
    <a v-for="item in navList" :key="item">{{ item }}</a>
    <!-- 키값 필요할때 -->
    <!-- <a v-for="(item, i) in navList" :key="i">{{ i + ':' + item }}</a> -->
  </div>
  
  <!-- 상품 리스트 -->
  <!-- <div>
    <div>
      <h4 :style="sty_color">{{products[0]}}</h4>
      <p>{{prices[0]}}원</p>
    </div>
    <div>
       <h4>{{ products[1]}}</h4>
       <p>{{prices[1]}}원</p>
    </div>  
    <div>
       <h4>{{ products[2]}}</h4>
       <p>{{prices[2]}}원</p>
    </div>  
  </div> -->
  <div>
    <div v-for="item1 in products" :key="item1">
      <h4>{{ item1.name }}</h4>
      <p>{{ item1.price }}원</p>
    </div>
  </div>
</template>

<script>
// 데이터 저장 영역
export default {
  name: 'App',
  // 데이터 바인딩 : 우리가 사용할 데이터를 저장하는 공간
  data() {
    return {
      navList: ['홈', '상품', '기타', '문의'],
      sty_color: 'color: blue',
      // products: ['양말','티셔츠','바지'],
      // prices : ['1500', '25000', '30000'],
      products: [
        {'name' : '양말', 'price': 1500},
        {'name' : '티셔츠', 'price': 25000},
        {'name' : '바지', 'price': 30000}
      ]
    }
  },
  
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
.nav {
  background-color: #2c3e50;
  padding: 15px;
  border-radius: 10px;
}
.nav a {
  color: aliceblue;
  padding: 10px;
  text-decoration: none;
  
}
.nav a:hover {
  background-color: rgb(144, 92, 28);
  border-radius: 10px;
}
</style>
