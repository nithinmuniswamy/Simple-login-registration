function searchItems() {
    let filter, data, i, text;
    const input = document.getElementById("filter_input");
    filter = input.value.toUpperCase();
    const table = document.getElementById("fillter_table");
    const tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        data = tr[i].getElementsByTagName("td")[0];
        data = tr[i].getElementsByTagName("td")[2];
        if (data) {
        text = data.textContent || data.innerText;
        if (text.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
        } else {
            tr[i].style.display = "none";
        }
        }       
    }
}