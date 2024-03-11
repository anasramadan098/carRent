function handleActiveClassesFrom(elements) {
    elements.forEach(e => {
        e.addEventListener('click',(e) => {
            // Remove Active From All Classes
            elements.forEach(e => e.classList.remove('active'));

            // Add On Uniqe One
            e.srcElement.classList.add('active');
        })
    })
}

handleActiveClassesFrom(document.querySelectorAll('.swiper img'));
handleActiveClassesFrom(document.querySelectorAll('ul.years li'));