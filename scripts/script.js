let listItems = document.querySelectorAll('.list-group-item');

listItems.forEach((item) => {
    item.addEventListener('click', (e) => {
        listItems.forEach((item) => {
            item.classList.remove('selected-item');
        });

        if (!item.classList.contains('list-group-item')) {
            e.target.parentElement.classList.add('selected-item');
        } else {
            item.classList.add('selected-item');
        }
    }, false);
});