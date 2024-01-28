window.onload = function () {
    document.getElementById("download")
        .addEventListener("click", () => {
            const invoice = this.document.getElementById("invoice");
            console.log(invoice);
            console.log(window);
            var opt = {
                margin:0.2,
                filename: 'Novation_Report.pdf',
                image: { type: 'jpeg', quality:0.98 },
                html2canvas: { scale: 2 },
                jsPDF: { unit: 'cm', format: 'A3', orientation: 'landscape' }
            };
            html2pdf().from(invoice).set(opt).save();
        })
}