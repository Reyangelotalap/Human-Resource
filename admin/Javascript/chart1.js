var ctx = document.getElementById('lineChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['January', 'Febuary', 'March', 'April', 'May', 'June'],
        datasets: [{
            label: 'Hired',
            data: [20, 5, 5, 0, 20, 4],
            backgroundColor: [
                'rgba(13,110,253)'
               
            ],
            borderColor: [
                'rgba(13,110,253)'
                
            ],
            borderWidth: 1
        }]
    },
    options: {
       responsive:true
    }
});