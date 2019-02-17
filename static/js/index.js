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
$articleRow = document.querySelector('.article-row')
$articleRow2 = document.querySelector('.article-row-2')
let isLanding = true

if (window.innerWidth < 768) {
    $burger.btn.style.display = 'none'
    $landing.style.display = 'none'
}

window.addEventListener('resize', () => {
    if(window.innerWidth < 768) {
        $burger.btn.style.display = 'none'
        $landing.style.display = 'none'
    } else {
        $burger.btn.style.display = 'flex'
        $landing.style.display = 'flex'
    }
})

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
        $articleRow.style.height = '35%'
        $articleRow2.style.visibility = 'visible'
        document.body.style.overflowY = 'visible'

        isLanding = false
    } else {
        $landing.style.display = 'flex'
        setTimeout(() => $landing.style.transform = 'scale(1)', 100)
        $articleRow.style.height = '50%'
        $articleRow2.style.visibility = 'hidden'
        document.body.style.overflowY = 'hidden'

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