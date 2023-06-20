const searchInput = document.querySelector('#search')

const createProductElement = ({name, price, image}) => {
    const product = `
    <a class="product" href="#">
        <div class="image">
            <img src="./assets/products_images/${image}" alt="${name}">
        </div>
        <div class="description">
            <div class="name">${name}</div>
            <div class="price">TSH ${price}/=</div>
        </div>
    </a>
    `

    return product
}

const createCategoryElement = ({name}) => {
    const category = `
        <div class="category" data-category="${name}">${name} <span style="font-weight: bold">></span> </div>
    `
    return category
}

const fetchData = async URI => {
    const data = await fetch(URI)
    const products = await data.json()
    return products
}

( async () => {
    const productsWrapper = document.querySelector('#products')
    const categoriesWrapper = document.querySelector('#categories')

    const products = await fetchData(`./php/api/products.php`)
    const categories = await fetchData(`./php/api/categories.php`)

    for(let product of products){
        const productElement = createProductElement(product)
        productsWrapper.innerHTML += productElement
    }

    for(let category of categories){
        const categoryElement = createCategoryElement(category)
        categoriesWrapper.innerHTML += categoryElement
    }
})()

searchInput.addEventListener('input', async e=>{
    const value = e.target.value
    const searchResults = document.querySelector('#searchResults')

    if(value.length > 0){
        searchResults.classList.add('searching')
        const products = await fetchData(`./php/api/products.php`)
        const filteredProducts = products.filter(product => product.name.includes(value))

        const preloader = searchResults.querySelector('#preloader')
        preloader.style.display = 'none'
        searchResults.innerHTML = ``

        for(let product of filteredProducts){
            let productElement = createProductElement(product)
            searchResults.innerHTML += productElement
        }
    }else{
        searchResults.innerHTML = ``
        searchResults.classList.remove('searching')
    }       
})