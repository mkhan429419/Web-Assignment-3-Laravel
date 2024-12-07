/********************************************************* 
      Task 2: DOM Manipulation
********************************************************* */
// Modal and Form Elements
const addItemBtn = document.getElementById("addItemBtn");
const removeItemBtn = document.getElementById("removeItemBtn");
const getStartedBtn = document.querySelector(".getStartedBtn");

const addPlanModal = document.getElementById("addPlanModal");
const closeModal = document.getElementById("closeModal");

const addPlanForm = document.getElementById("addPlanForm");
const pricingCardsContainer = document.getElementById("pricingCardsContainer");
const pricingSection = document.querySelector(".pricing-section");
const featureImages = document.querySelectorAll(".feature-image");

getStartedBtn.addEventListener("click", () => {
    pricingSection.scrollIntoView({ behavior: "smooth" });
});

addItemBtn.addEventListener("click", () => {
    addPlanModal.style.display = "flex";
});

closeModal.addEventListener("click", () => {
    addPlanModal.style.display = "none";
});
addPlanForm.addEventListener("submit", (e) => {
    e.preventDefault();

    // Get Form Values
    const planName = document.getElementById("planName").value;
    const planPrice = document.getElementById("planPrice").value;
    const planDescription = document.getElementById("planDescription").value;
    const planRate = document.getElementById("planRate").value;

    fetch("/pricing", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": document
                .querySelector('meta[name="csrf-token"]')
                .getAttribute("content"),
        },
        body: JSON.stringify({
            name: planName,
            price: planPrice,
            description: planDescription,
            rate: planRate,
        }),
    })
        .then((response) => response.json())
        .then((data) => {
            const newCard = document.createElement("div");
            newCard.classList.add("pricing-card");
            newCard.dataset.id = data.plan.id; // Set the ID on the new card
            newCard.innerHTML = `
            <h3>${data.plan.name}</h3>
            <p class="price">$${data.plan.price} <span>${data.plan.rate}</span></p>
            <p class="plan-description">${data.plan.description}</p>
            <button class="pricing-button">Get Started</button>
        `;
            pricingCardsContainer.appendChild(newCard);
            addPlanForm.reset();
            addPlanModal.style.display = "none";
        })
        .catch((error) => console.error("Error:", error));
});
removeItemBtn.addEventListener("click", () => {
    const pricingCardsContainer = document.getElementById(
        "pricingCardsContainer"
    );
    let lastCard = pricingCardsContainer.lastElementChild;
    if (lastCard) {
        const id = lastCard.dataset.id;
        if (!id) {
            console.error("Plan ID not found!");
            return;
        }
        fetch(`/pricing/${id}`, {
            method: "DELETE",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": document
                    .querySelector('meta[name="csrf-token"]')
                    .getAttribute("content"),
            },
        })
            .then((response) => response.json())
            .then((data) => {
                if (data.success) {
                    pricingCardsContainer.removeChild(lastCard);
                    console.log("Plan deleted successfully.");
                } else {
                    console.error("Error deleting the plan: ", data.message);
                }
            })
            .catch((error) => {
                console.error("Error:", error);
            });
    }
});
featureImages.forEach((image) => {
    const originalSrc = image.getAttribute("data-original");
    const hoverSrc = image.getAttribute("data-hover");

    // Change the image source on hover
    image.addEventListener("mouseover", () => {
        image.src = hoverSrc;
    });

    image.addEventListener("mouseout", () => {
        image.src = originalSrc;
    });
});
