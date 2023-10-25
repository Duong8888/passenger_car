var ctx = document.getElementById('myChart').getContext('2d');

var myChart = new Chart(ctx, {
    type: 'bar', // bar, line, pie
    data: {
        labels: ['T1','T2','T3','T4','T5','T6','T7','T8','T9','T10','T11','T12',], 
        datasets: [{
            label: 'Ticket Purchase',
            data: [1, 10, 3, 5, 2, 3, 6, 20, 10],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});