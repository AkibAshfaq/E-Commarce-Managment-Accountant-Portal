function drawChart(xlabel, ylabel, divs) {
    const data = [{
        x: xlabel,
        y: ylabel,
        type: "bar",
        orientation: "v",
        marker: {color: 'rgba(55,128,191,0.6)'}
    }];

    const layout = {
        title: divs + ' Product Sales',
        xaxis: { title: 'Product type' },
        yaxis: { title:  'Product Sold' },
        margin: { l: 100, r: 20, t: 50, b: 50 }
    };

    Plotly.newPlot(divs, data, layout);
}



