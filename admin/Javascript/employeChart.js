var ctx = document.getElementById('doughnut').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ['Active', 'Inactive'],
        datasets: [{
            label: '',
            data: [50, 50],
            backgroundColor: [
                'rgba(13,110,253)',
              
            
                'rgba(13,110,253)'
            ],
            borderColor: [
             
                
            ],
            borderWidth: 1
        }]
    },
    options: {
       responsive:true
    }
});