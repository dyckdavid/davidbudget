function toggleMobileMenu(menu) {
    menu.classList.toggle('open');
}

updateSubTotal(); // Initial call

function updateSubTotal() {
  var table = document.getElementById("myTable");
  let subTotal = Array.from(table.rows).slice(1).reduce((total, row) => {
    return total + parseFloat(row.cells[2].innerHTML);
  }, 0);
  document.getElementById("val").innerHTML = "$" + subTotal.toFixed(2);
}

updateSubTotalExpense(); // Initial call

function updateSubTotalExpense() {
    var table = document.getElementById("myTable");
    let subTotal = Array.from(table.rows).slice(1).reduce((total, row) => {
      return total + parseFloat(row.cells[3].innerHTML);
    }, 0);
    document.getElementById("valu").innerHTML = "$" + subTotal.toFixed(2);
  }



  updateSubGranTotal(); // Initial call

function updateSubGranTotal() {
    var table = document.getElementById("myTable");
    let subTotal = Array.from(table.rows).slice(1).reduce((total, row) => {
      return total + parseFloat(row.cells[3].innerHTML);
    }, 0);
    let subTotalIncome = Array.from(table.rows).slice(1).reduce((total, row) => {
        return total + parseFloat(row.cells[2].innerHTML);
      }, 0);
    let resultTotal = subTotal - subTotalIncome;
    document.getElementById("result").innerHTML = "Total $" + resultTotal.toFixed(2);
  }


  document.querySelectorAll("#myTable tr td").forEach(td => {
    if (td.textContent.trim() === "") td.textContent = 0;
  });