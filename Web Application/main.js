async function getProducts() {
	const url = "https://fakestoreapi.com/products";
	const response = await fetch(url),
		products = await response.json();
	return products;
}

async function displayProducts() {
	const row = document.querySelector(".row");
	const productsData = await getProducts();

	for (let data of productsData) {
		const div = document.createElement("div");
		div.className = "col-lg-4 col-md-6 col-sm-12";
		div.innerHTML = `
        <div class="card" style="width: 20rem; border:none">
        <img src="${
					data.image ? data.image : "./2.jpg"
				}" class="card-img-top" alt="Fake product">
        <div class="card-body">
            <h5 class="card-title">${data.title}</h5>
            <p class="card-text">${
							data.description
								? data.description
								: "Your perfect pack for everyday use and walks in the forest. Stash your laptop (up to 15 inches) in the padded sleeve, your everyday"
						}</p>
            <a href="${data.url}" target="_blank"
            class="btn btn-dark">Get Product</a>
        </div>
        </div>
        `;
		row.appendChild(div);
	}
}
document.addEventListener("DOMContentLoaded", displayProducts);
