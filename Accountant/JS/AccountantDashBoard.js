function drawChart(xlabel, ylabel) {

    const data = [{
        x: xlabel,
        y: ylabel,
        type: "bar",
        orientation: "v",
        marker: {color: 'rgba(55,128,191,0.6)'}
    }];

    const layout = {
        title: ' Category Wise Product Sales',
        xaxis: { title: 'Product type' },
        yaxis: { title: 'Product Sold' },
        margin: { l: 100, r: 20, t: 50, b: 50 }
    };

    Plotly.newPlot('CategorySalesChart', data, layout);
}



function drawLineChart(xlabel, ylabel) {

    const linedata = [{
        x: xlabel,
        y: ylabel,
        mode: 'lines+markers',
    }];

    const linelayout = {
        title: 'Product Category-wise Profit',
        xaxis: { title: 'Product Category' },
        yaxis: { title: 'Profit in BDT' },
        margin: { l: 100, r: 20, t: 50, b: 50 }
    };

    Plotly.newPlot('Countryprofit', linedata, linelayout);
}

