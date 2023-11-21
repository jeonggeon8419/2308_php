<template>
	<div class="discount">

    <p>(마감임박)지금 바로 구매 {{ discountNum }}분 남음</p>
  </div>
</template>
<script>
export default {
	name: 'Discount',
	data() {
		return {
			discountNum: 1,
			intervalInfo: null,
		}
	},
	// mounted() : 라이플사이클 훅, mounted단계에서 실행되는 영역
	mounted() {
		this.intervalIfo = setInterval(() => {
			this.discountNum--;
		}, 1000 * 60);
	},
	updated() {
		if( this.discountNum === 0) {
		clearInterval(this.intervalIfo);
		}
	},
}
</script>
<style>
	
</style>