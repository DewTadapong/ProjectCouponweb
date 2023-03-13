
// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

// Pie Chart Example
var totalcouponall = document.getElementById("totalcouponall").value;
var totalcouponuse = document.getElementById("totalcouponuse").value;
var totalcouponnow = document.getElementById("totalcouponnow").value;
var totalcouponout = document.getElementById("totalcouponout").value;

var ctx = document.getElementById("myPieChart");
var myPieChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: ["คูปองทั้งหมด", "ที่ถูกใช้", "คงเหลือ", "หมดอายุ"],
    datasets: [{
      data: [totalcouponall, totalcouponuse, totalcouponnow,totalcouponout],
      backgroundColor: ['#4e73df', '#1cc88a', '#f6c23e', '#e74a3b'],
      hoverBorderColor: "rgba(234, 236, 244, 1)",
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
    },
    legend: {
      display: false
    },
    cutoutPercentage: 80,
  },
});
