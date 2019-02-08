const $burger = {}
$burger.btn = document.querySelector('.burger')
$burger.part1 = document.querySelector('.burger-el-1')
$burger.part2 = document.querySelector('.burger-el-2')
$burger.part3 = document.querySelector('.burger-el-3')
$burger.part4 = document.querySelector('.burger-el-4')

$burger.btn.addEventListener('click', () => {
    $burger.part1.classList.toggle('burger-el-1-anim')
    $burger.part2.classList.toggle('burger-el-2-anim')
    $burger.part3.classList.toggle('burger-el-3-anim')
    $burger.part4.classList.toggle('burger-el-4-anim')
})

const $search = {}
$search.input = document.querySelector('.search-input')
$search.btn = document.querySelector('.search-btn')

$search.input.addEventListener('focusin', () => {
    $search.input.classList.toggle('search-input-anim')
})