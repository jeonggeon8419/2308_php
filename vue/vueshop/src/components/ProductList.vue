<template>
	<div>
		<h4 @click="$emit('fncOpen', data)">{{ data.name }}</h4>
		<p>{{ data.price }} 원</p>
		<button @click="$emit('fncClick', productKey)">조회수</button>
		<span>: {{ data.viewCnt }}</span>
	</div>
</template>
<script>

export default {
	name: 'ProductList',
	props: {
		data: Object,
		productKey: Number,
	}
}
</script>
<style>
	
</style>