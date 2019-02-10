/**
 * Burger Menu
 */

const $burger = {}
$burger.btn = document.querySelector('.burger')
$burger.part1 = $burger.btn.querySelector('.burger-el-1')
$burger.part2 = $burger.btn.querySelector('.burger-el-2')
$burger.part3 = $burger.btn.querySelector('.burger-el-3')
$burger.part4 = $burger.btn.querySelector('.burger-el-4')

$landing = document.querySelector('.landing-row')
let isLanding = true

$burger.btn.addEventListener('click', () => {
    $burger.part1.classList.toggle('burger-el-1-anim')
    $burger.part2.classList.toggle('burger-el-2-anim')
    $burger.part3.classList.toggle('burger-el-3-anim')
    $burger.part4.classList.toggle('burger-el-4-anim')

    landingDisplay()
})

const landingDisplay = () => {
    if(isLanding) {
        $landing.style.transform = 'scale(0)'
        setTimeout(() => $landing.style.display = 'none', 300)
        isLanding = false
    } else {
        $landing.style.display = 'flex'
        setTimeout(() => $landing.style.transform = 'scale(1)', 100)
        isLanding = true
    }
}

/**
 * Search Bar
 */

const $search = {}
$search.input = document.querySelector('.search-input')
$search.btn = document.querySelector('.search-btn')

$search.input.addEventListener('focusin', () => {
    $search.input.classList.toggle('search-input-anim')
})

$search.input.addEventListener('focusout', () => {
    $search.input.classList.toggle('search-input-anim')
})

