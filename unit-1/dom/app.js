users = [
    {
        name: "Aakash Raj Shakya",
        address: "Lagan Tole"
    },
    {
        name: "Aakash Raj Shakya",
        address: "Lagan Tole"
    },
    {
        name: "Aakash Raj Shakya",
        address: "Lagan Tole"
    },
    {
        name: "Aakash Raj Shakya",
        address: "Lagan Tole"
    },
    {
        name: "Aakash Raj Shakya",
        address: "Lagan Tole"
    }
];
div = document.getElementById('main-table');
table = document.createElement('table');


for (index in users) {
    tableRow = document.createElement('tr');
    table.appendChild(tableRow);
    for (key in users[index]) {
        tableColumn = document.createElement('td');
        content = document.createTextNode(users[index][key]);
        tableColumn.appendChild(content);
        tableRow.appendChild(tableColumn);
    }
}
table.setAttribute('class', 'table');
div.appendChild(table);