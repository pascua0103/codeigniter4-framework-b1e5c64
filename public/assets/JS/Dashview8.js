//Available Products
async function getAvailableProducts(){
    //Get data from backend using get API
    const response = await fetch('http://localhost:8080/getvalues');

    //Convert the data to JSON Object
    const jsonData = await response.json();

    //Set the data in the html element
    document.getElementById("available_products").innerHTML = jsonData.available_products;


}

// Product Price
async function getProductPrice(){
    //Get data from backend using get API
    const response = await fetch('http://localhost:8080/getvalues');

    //Convert the data to JSON Object
    const jsonData = await response.json();

    //Set the data in the html element
    document.getElementById("product_price").innerHTML = jsonData.product_price;


}

//Customers Order
async function getCustomersOrder(){
    //Get data from backend using get API
    const response = await fetch('http://localhost:8080/getvalues');

    //Convert the data to JSON Object
    const jsonData = await response.json();


    //Set the data in the html element
        document.getElementById("customers_order").innerHTML = jsonData.customers_order;

}

//Total Transaction
async function getTotalTransaction(){
    //Get data from backend using get API
        const response = await fetch('http://localhost:8080/getvalues');

    //Convert the data to JSON Object
         const jsonData = await response.json();


    //Set the data in the html element
         document.getElementById("total_transaction").innerHTML = jsonData.total_transaction;

}




/**
 * get data from the dashboard
 */

function getDashboardData(){

    //geting Available Products
    getAvailableProducts()

    //getting Product Price
    getProductPrice()

    //getting Customers Order
    getCustomersOrder()

    //getting Total Transaction
    getTotalTransaction()
}



window.onload = getDashboardData;
