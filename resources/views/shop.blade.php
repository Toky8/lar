
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NOVA STORE — Boutique premium</title>
    <meta name="description" content="Découvrez notre sélection de produits premium chez NOVA STORE.">

    <style>
        :root {
            --bg: #090b10;
            --panel: #11141c;
            --panel-light: #191d28;
            --text: #f5f5f7;
            --muted: #999eae;
            --accent: #a78bfa;
            --border: rgba(255,255,255,.09);
        }

        * { box-sizing: border-box; }

        html { scroll-behavior: smooth; }

        body {
            margin: 0;
            background: var(--bg);
            color: var(--text);
            font-family: Inter, "Segoe UI", Arial, sans-serif;
        }

        button, input { font: inherit; }
        button { cursor: pointer; }

        a {
            color: inherit;
            text-decoration: none;
        }

        .container {
            width: min(1180px, 92%);
            margin: auto;
        }

        header {
            position: sticky;
            top: 0;
            z-index: 10;
            background: rgba(9,11,16,.88);
            backdrop-filter: blur(18px);
            border-bottom: 1px solid var(--border);
        }

        .nav {
            min-height: 76px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
        }

        .logo {
            font-size: 23px;
            font-weight: 900;
            letter-spacing: 2px;
        }

        .logo span { color: var(--accent); }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 28px;
            color: var(--muted);
            font-size: 14px;
        }

        .nav-links a:hover { color: white; }

        .cart-button, .primary-button {
            border: 0;
            border-radius: 12px;
            background: var(--accent);
            color: #100d1d;
            font-weight: 800;
            padding: 12px 17px;
        }

        .hero {
            padding: 75px 0 55px;
            display: grid;
            grid-template-columns: 1.05fr .95fr;
            gap: 48px;
            align-items: center;
        }

        .eyebrow {
            display: inline-block;
            color: var(--accent);
            font-size: 12px;
            font-weight: 800;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        h1 {
            font-size: clamp(40px, 6vw, 70px);
            line-height: 1.04;
            letter-spacing: -3px;
            margin: 20px 0;
        }

        h1 span {
            color: var(--accent);
        }

        .hero p {
            max-width: 470px;
            color: var(--muted);
            line-height: 1.9;
        }

        .hero-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 13px;
            margin-top: 28px;
        }

        .secondary-button {
            padding: 12px 17px;
            border: 1px solid var(--border);
            border-radius: 12px;
            background: transparent;
            color: white;
        }

        .hero-image {
            min-height: 370px;
            border: 1px solid var(--border);
            border-radius: 25px;
            overflow: hidden;
            position: relative;
            background: #171923;
        }

        .hero-image img {
            width: 100%;
            height: 100%;
            min-height: 370px;
            object-fit: cover;
            display: block;
            opacity: .88;
        }

        .hero-label {
            position: absolute;
            bottom: 20px;
            left: 20px;
            padding: 13px 16px;
            border: 1px solid var(--border);
            border-radius: 13px;
            background: rgba(9,11,16,.82);
            backdrop-filter: blur(10px);
        }

        .benefits {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
            margin: 15px auto 75px;
        }

        .benefit {
            background: var(--panel);
            border: 1px solid var(--border);
            padding: 20px;
            border-radius: 15px;
        }

        .benefit strong {
            display: block;
            margin-bottom: 7px;
        }

        .benefit span {
            color: var(--muted);
            font-size: 13px;
        }

        .section-heading {
            display: flex;
            align-items: end;
            justify-content: space-between;
            gap: 20px;
            margin-bottom: 25px;
        }

        h2 {
            font-size: clamp(27px, 4vw, 38px);
            margin: 10px 0;
            letter-spacing: -1px;
        }

        .section-heading p {
            color: var(--muted);
            margin-bottom: 0;
        }

        .toolbar {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 15px;
            margin-bottom: 25px;
        }

        .filters {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
        }

        .filter {
            background: var(--panel);
            color: var(--muted);
            border: 1px solid var(--border);
            padding: 10px 15px;
            border-radius: 30px;
        }

        .filter.active {
            color: #100d1d;
            background: var(--accent);
            border-color: var(--accent);
        }

        .search {
            width: min(100%, 270px);
            padding: 11px 14px;
            border: 1px solid var(--border);
            border-radius: 12px;
            background: var(--panel);
            color: white;
            outline: none;
        }

        .products {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 18px;
        }

        .product {
            overflow: hidden;
            border: 1px solid var(--border);
            border-radius: 18px;
            background: var(--panel);
            transition: transform .25s, border-color .25s;
        }

        .product:hover {
            transform: translateY(-5px);
            border-color: rgba(167,139,250,.55);
        }

        .product-image {
            position: relative;
            background: var(--panel-light);
            overflow: hidden;
        }

        .product-image img {
            width: 100%;
            aspect-ratio: 1 / 1;
            object-fit: cover;
            display: block;
            transition: transform .4s;
        }

        .product:hover img { transform: scale(1.05); }

        .tag {
            position: absolute;
            top: 12px;
            left: 12px;
            padding: 6px 9px;
            background: rgba(9,11,16,.85);
            border: 1px solid var(--border);
            border-radius: 7px;
            font-size: 11px;
        }

        .product-info { padding: 16px; }

        .category {
            color: var(--accent);
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .product h3 {
            margin: 9px 0;
            font-size: 16px;
        }

        .description {
            color: var(--muted);
            font-size: 12px;
            line-height: 1.6;
            min-height: 38px;
        }

        .product-bottom {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 8px;
            margin-top: 17px;
        }

        .price { font-weight: 800; }

        .add-button {
            border: 0;
            border-radius: 9px;
            padding: 10px 12px;
            background: var(--panel-light);
            color: white;
        }

        .add-button:hover {
            background: var(--accent);
            color: #100d1d;
        }

        .empty {
            display: none;
            color: var(--muted);
            padding: 30px 0;
        }

        .newsletter {
            margin: 80px 0;
            padding: 38px;
            border: 1px solid var(--border);
            border-radius: 22px;
            background: radial-gradient(ellipse at top right, #292047, #11141c 65%);
            text-align: center;
        }

        .newsletter p {
            color: var(--muted);
            line-height: 1.8;
        }

        footer {
            border-top: 1px solid var(--border);
            padding: 28px 0;
            color: var(--muted);
            font-size: 13px;
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            gap: 15px;
            flex-wrap: wrap;
        }

        .toast {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 20;
            max-width: calc(100% - 40px);
            background: #211b35;
            border: 1px solid #514075;
            color: white;
            padding: 15px 20px;
            border-radius: 12px;
            opacity: 0;
            transform: translateY(12px);
            pointer-events: none;
            transition: .25s;
        }

        .toast.show {
            opacity: 1;
            transform: translateY(0);
        }

        @media (max-width: 900px) {
            .products { grid-template-columns: repeat(2, minmax(0, 1fr)); }
            .hero { grid-template-columns: 1fr; padding-top: 45px; }
            .hero-image, .hero-image img { min-height: 300px; }
        }

        @media (max-width: 560px) {
            .nav { min-height: 68px; }
            .nav-links { display: none; }
            .benefits { grid-template-columns: 1fr; margin-bottom: 55px; }
            .section-heading { align-items: start; flex-direction: column; }
            .products { gap: 10px; }
            .product-info { padding: 11px; }
            .product h3 { font-size: 14px; }
            .product-bottom { align-items: start; flex-direction: column; }
            .add-button { width: 100%; }
            .newsletter { padding: 25px 18px; }
            h1 { letter-spacing: -1.5px; }
        }
    </style>
</head>

<body>
<header>
    <div class="container nav">
        <a href="#" class="logo">NOVA<span>.</span></a>

        <nav class="nav-links">
            <a href="#accueil">Accueil</a>
            <a href="#produits">Produits</a>
            <a href="#avantages">Nos avantages</a>
        </nav>

        <button class="cart-button" id="cartButton">
            Panier (<span id="cartCount">0</span>)
        </button>
    </div>
</header>

<main>
    <section class="container hero" id="accueil">
        <div>
            <span class="eyebrow">La sélection premium</span>
            <h1>Le meilleur de la technologie.<br><span>Sans compromis.</span></h1>
            <p>
                Découvrez une sélection d'accessoires, de produits high-tech
                et d'objets du quotidien choisis pour leur design et leur qualité.
            </p>

            <div class="hero-actions">
                <a href="#produits" class="primary-button">Découvrir la collection ↗</a>
                <a href="#avantages" class="secondary-button">Pourquoi NOVA ?</a>
            </div>
        </div>

        <div class="hero-image">
            <img
                src="https://images.unsplash.com/photo-1498049794561-7780e7231661?auto=format&fit=crop&w=1200&q=85"
                alt="Sélection de produits technologiques"
            >
            <div class="hero-label">
                <strong>Une expérience différente</strong><br>
                <small style="color:#b9b8c7">Design. Qualité. Simplicité.</small>
            </div>
        </div>
    </section>

    <section class="container benefits" id="avantages">
        <div class="benefit">
            <strong>✦ Sélection exigeante</strong>
            <span>Des produits choisis avec soin.</span>
        </div>
        <div class="benefit">
            <strong>◇ Paiement à confirmer</strong>
            <span>Configure les moyens de paiement avant la vente.</span>
        </div>
        <div class="benefit">
            <strong>↗ Service client</strong>
            <span>Ajoute ici tes coordonnées et horaires.</span>
        </div>
    </section>

    <section class="container" id="produits">
        <div class="section-heading">
            <div>
                <span class="eyebrow">La collection</span>
                <h2>Nos produits populaires</h2>
                <p>Une sélection pour tous les jours.</p>
            </div>
        </div>

        <div class="toolbar">
            <div class="filters">
                <button class="filter active" data-category="Tous">Tout</button>
                <button class="filter" data-category="Audio">Audio</button>
                <button class="filter" data-category="Informatique">Informatique</button>
                <button class="filter" data-category="Accessoires">Accessoires</button>
            </div>

            <input
                class="search"
                id="searchInput"
                type="search"
                placeholder="Rechercher un produit..."
                aria-label="Rechercher un produit"
            >
        </div>

        <div class="products" id="productGrid"></div>
        <p class="empty" id="emptyMessage">Aucun produit ne correspond à ta recherche.</p>
    </section>

    <section class="container newsletter">
        <span class="eyebrow">Reste informé</span>
        <h2>Les nouveautés arrivent ici.</h2>
        <p>Prépare une liste de diffusion pour informer tes clients des prochaines collections.</p>
        <a class="primary-button" href="#produits">Explorer les produits</a>
    </section>
</main>

<footer>
    <div class="container footer-content">
        <span>© <span id="year"></span> NOVA STORE</span>
        <span>Boutique de démonstration — personnalise les informations avant la mise en ligne.</span>
    </div>
</footer>

<div class="toast" id="toast" role="status" aria-live="polite"></div>

<script>
    const products = [
        {
            id: 1,
            name: "Casque Studio Pro",
            category: "Audio",
            price: 189000,
            description: "Un son immersif et un design élégant.",
            tag: "POPULAIRE",
            image: "https://images.unsplash.com/photo-1505740420928-5e560c06d30e?auto=format&fit=crop&w=700&q=80"
        },
        {
            id: 2,
            name: "Ordinateur portable",
            category: "Informatique",
            price: 2490000,
            description: "Pensé pour le travail et la création.",
            tag: "PREMIUM",
            image: "https://images.unsplash.com/photo-1496181133206-80ce9b88a853?auto=format&fit=crop&w=700&q=80"
        },
        {
            id: 3,
            name: "Montre connectée",
            category: "Accessoires",
            price: 329000,
            description: "Le suivi du quotidien, avec style.",
            tag: "NOUVEAU",
            image: "https://images.unsplash.com/photo-1523275335684-37898b6baf30?auto=format&fit=crop&w=700&q=80"
        },
        {
            id: 4,
            name: "Écouteurs sans fil",
            category: "Audio",
            price: 149000,
            description: "Un format compact pour bouger librement.",
            tag: "TENDANCE",
            image: "https://images.unsplash.com/photo-1606220945770-b5b6c2c55bf1?auto=format&fit=crop&w=700&q=80"
        },
        {
            id: 5,
            name: "Clavier mécanique",
            category: "Informatique",
            price: 219000,
            description: "Confort et précision pour ton espace de travail.",
            tag: "SÉLECTION",
            image: "https://images.unsplash.com/photo-1587829741301-dc798b83add3?auto=format&fit=crop&w=700&q=80"
        },
        {
            id: 6,
            name: "Sac minimaliste",
            category: "Accessoires",
            price: 99000,
            description: "Un compagnon pratique au style discret.",
            tag: "ESSENTIEL",
            image: "https://images.unsplash.com/photo-1553062407-98eeb64c6a62?auto=format&fit=crop&w=700&q=80"
        },
        {
            id: 7,
            name: "Enceinte Bluetooth",
            category: "Audio",
            price: 175000,
            description: "La musique partout, dans un format compact.",
            tag: "POPULAIRE",
            image: "https://images.unsplash.com/photo-1608043152269-423dbba4e7e1?auto=format&fit=crop&w=700&q=80"
        },
        {
            id: 8,
            name: "Souris sans fil",
            category: "Informatique",
            price: 79000,
            description: "Une prise en main confortable et précise.",
            tag: "ESSENTIEL",
            image: "https://images.unsplash.com/photo-1527864550417-7fd91fc51a46?auto=format&fit=crop&w=700&q=80"
        }
    ];

    const money = amount =>
        new Intl.NumberFormat("fr-FR").format(amount) + " Ar";

    let activeCategory = "Tous";
    let cart = {};

    try {
        cart = JSON.parse(localStorage.getItem("nova_cart") || "{}");
        if (!cart || typeof cart !== "object" || Array.isArray(cart)) cart = {};
    } catch {
        cart = {};
    }

    const grid = document.getElementById("productGrid");
    const searchInput = document.getElementById("searchInput");
    const emptyMessage = document.getElementById("emptyMessage");
    const toast = document.getElementById("toast");

    function showToast(message) {
        toast.textContent = message;
        toast.classList.add("show");

        clearTimeout(showToast.timer);
        showToast.timer = setTimeout(() => {
            toast.classList.remove("show");
        }, 2500);
    }

    function renderProducts() {
        const query = searchInput.value.trim().toLowerCase();

        const filtered = products.filter(product => {
            const matchesCategory =
                activeCategory === "Tous" ||
                product.category === activeCategory;

            const matchesSearch =
                product.name.toLowerCase().includes(query) ||
                product.category.toLowerCase().includes(query);

            return matchesCategory && matchesSearch;
        });

        grid.innerHTML = filtered.map(product => `
            <article class="product">
                <div class="product-image">
                    <img
                        src="${product.image}"
                        alt="${product.name}"
                        loading="lazy"
                    >
                    <span class="tag">${product.tag}</span>
                </div>

                <div class="product-info">
                    <span class="category">${product.category}</span>
                    <h3>${product.name}</h3>
                    <p class="description">${product.description}</p>

                    <div class="product-bottom">
                        <span class="price">${money(product.price)}</span>
                        <button class="add-button" data-add="${product.id}">
                            + Ajouter
                        </button>
                    </div>
                </div>
            </article>
        `).join("");

        emptyMessage.style.display = filtered.length ? "none" : "block";
    }

    function saveCart() {
        try {
            localStorage.setItem("nova_cart", JSON.stringify(cart));
        } catch {
            showToast("Impossible d'enregistrer le panier dans ce navigateur.");
        }
        updateCartCount();
    }

    function updateCartCount() {
        const count = Object.values(cart).reduce(
            (total, quantity) => total + (Number(quantity) || 0),
            0
        );

        document.getElementById("cartCount").textContent = count;
    }

    grid.addEventListener("click", event => {
        const button = event.target.closest("[data-add]");
        if (!button) return;

        const id = button.dataset.add;
        cart[id] = (Number(cart[id]) || 0) + 1;

        saveCart();

        const product = products.find(item => String(item.id) === id);
        showToast(product.name + " ajouté au panier.");
    });

    document.querySelectorAll(".filter").forEach(button => {
        button.addEventListener("click", () => {
            activeCategory = button.dataset.category;

            document.querySelectorAll(".filter").forEach(item => {
                item.classList.toggle("active", item === button);
            });

            renderProducts();
        });
    });

    searchInput.addEventListener("input", renderProducts);

    document.getElementById("cartButton").addEventListener("click", () => {
        const entries = products
            .filter(product => Number(cart[product.id]) > 0)
            .map(product => ({
                product,
                quantity: Number(cart[product.id])
            }));

        if (!entries.length) {
            showToast("Ton panier est vide.");
            return;
        }

        const details = entries.map(({ product, quantity }) =>
            `${product.name} × ${quantity} — ${money(product.price * quantity)}`
        );

        const total = entries.reduce(
            (sum, entry) => sum + entry.product.price * entry.quantity,
            0
        );

        const message = [
            "TON PANIER",
            "",
            ...details,
            "",
            "TOTAL : " + money(total),
            "",
            "Ceci est un panier de démonstration. La commande en ligne n'est pas encore activée."
        ].join("\n");

        alert(message);
    });

    document.getElementById("year").textContent = new Date().getFullYear();

    renderProducts();
    updateCartCount();
</script>
</body>
</html>
