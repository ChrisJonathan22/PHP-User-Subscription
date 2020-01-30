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

let subscriberCount = document.querySelector('#subscriberCount').innerHTML;
let deletedSubscriberCount = document.querySelector('#deletedSubscriberCount').innerHTML;

console.log(subscriberCount);


let ctx = document.getElementById('myChart').getContext('2d');
    let myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Subscriber Count', 'Deleted Subscriber Count'],
            datasets: [{
                label: '# of Votes',
                data: [subscriberCount, deletedSubscriberCount],
                backgroundColor: [
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(255, 99, 132, 0.2)'
                ],
                borderColor: [
                    'rgba(75, 192, 192, 1)',
                    'rgba(255, 99, 132, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
});