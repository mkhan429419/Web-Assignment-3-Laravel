/********************************************************* 
      Task 2: DOM Manipulation
********************************************************* */
// Modal and Form Elements
const addItemBtn = document.getElementById("addItemBtn");
const removeItemBtn = document.getElementById("removeItemBtn");
const getStartedBtn = document.querySelector(".getStartedBtn");
const updatePlanBtn = document.querySelectorAll("#update-button");

const addPlanModal = document.getElementById("addPlanModal");
const updatePlanModal = document.getElementById("updatePlanModal");
const closeModal = document.getElementById("closeModal");
const closeUpdateModal = document.getElementById("closeUpdateModal");

const addPlanForm = document.getElementById("addPlanForm");
const updatePlanForm = document.getElementById("updatePlanForm");
const pricingCardsContainer = document.getElementById("pricingCardsContainer");
const pricingSection = document.querySelector(".pricing-section");
const featureImages = document.querySelectorAll(".feature-image");

getStartedBtn?.addEventListener("click", () => {
    pricingSection.scrollIntoView({ behavior: "smooth" });
});

addItemBtn?.addEventListener("click", () => {
    addPlanModal.style.display = "flex";
});

closeModal?.addEventListener("click", () => {
    addPlanModal.style.display = "none";
});

closeUpdateModal?.addEventListener("click", () => {
    updatePlanModal.style.display = "none";
});
// handling submission of add plan form
addPlanForm?.addEventListener("submit", (e) => {
    e.preventDefault();
    const planName = document.getElementById("planName").value;
    const planPrice = document.getElementById("planPrice").value;
    const planDescription = document.getElementById("planDescription").value;
    const planRate = document.getElementById("planRate").value;
    // sending post request for creating new plan
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
        .then((response) => {
            if (!response.ok) {
                return response.json().then((errorData) => {
                    throw new Error(
                        errorData.message || "Something went wrong"
                    );
                });
            }
            return response.json();
        })
        .then((data) => {
            // creating a new pricing card
            const newCard = document.createElement("div");
            newCard.classList.add("pricing-card");
            newCard.dataset.id = data.plan.id;
            newCard.innerHTML = `
            <h3>${data.plan.name}</h3>
            <p class="price">$${data.plan.price} <span>${data.plan.rate}</span></p>
            <p class="plan-description">${data.plan.description}</p>
            <button class="pricing-button">Get Started</button>
            <button id="update-button" class="update-plan-button"  >Update plan</button>
        `;
            pricingCardsContainer.appendChild(newCard);
            addPlanForm.reset(); // reset forms fields
            addPlanModal.style.display = "none";
        })
        .catch((error) => console.error("Error:", error));
});
// creating and attaching update plan model to dom
function createModal() {
    const modalHtml = `
        <div id="updatePlanModal" class="modal">
            <div class="modal-content">
               <div class="modal-header">
                    <button class="close-btn" id="closeUpdateModal">&times;</button>
                </div>
               <h2>Update the Pricing Plan</h2>
            <form id="updatePlanForm">
              <input type="hidden" id="planId" value="{{ $plan->id }}"  />
              <label for="planName">Plan Name:</label>
              <input
                type="text"
                id="name"
                name="name"
                placeholder="Enter plan name"
                required
              />

              <label for="planPrice">Price ($):</label>
              <input
                type="number"
                id="price"
                name="price"
                placeholder="Enter price"
                required
              />

              <label for="planRate">Rate Per Period:</label>
              <input
                type="text"
                id="rate"
                name="rate"
                placeholder="e.g., per session"
                required
              />

              <label for="planDescription">Description:</label>
              <textarea
                id="description"
                placeholder="Provide a brief description"
                name="description"
                rows="4"
                required
              ></textarea>
              <button type="submit">Update Plan</button>
            </form>
            </div>
        </div>
    `;
    const modalContainer = document.createElement("div");
    modalContainer.innerHTML = modalHtml;
    document.body.appendChild(modalContainer);
    attachModalEventListeners();
}
// attaching event listener at update modal after its creation
function attachModalEventListeners() {
    const updatePlanModal = document.getElementById("updatePlanModal");
    const closeUpdateModal = document.getElementById("closeUpdateModal");
    closeUpdateModal.addEventListener("click", () => {
        updatePlanModal.style.display = "none";
    });
    const updatePlanForm = document.getElementById("updatePlanForm");
    updatePlanForm?.addEventListener("submit", (e) => {
        e.preventDefault();
        const planId = document.getElementById("planId").value;
        const planName = document.getElementById("name").value;
        const planPrice = document.getElementById("price").value;
        const planDescription = document.getElementById("description").value;
        const planRate = document.getElementById("rate").value;
        // console.log({
        //     planId,
        //     planName,
        //     planPrice,
        //     planDescription,
        //     planRate,
        // });
        // sending put request to update the plan
        fetch(`/pricing/${planId}`, {
            method: "PUT",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": document.querySelector(
                    'meta[name="csrf-token"]'
                ).content,
            },
            body: JSON.stringify({
                name: planName,
                price: planPrice,
                rate: planRate,
                description: planDescription,
            }),
        })
            .then((response) => response.json())
            .then((data) => {
                if (data.success) {
                    // showing the updated data on corresponding card
                    const specificCard = document.querySelector(
                        `.pricing-card[data-id='${planId}']`
                    );
                    if (specificCard) {
                        specificCard.querySelector("h3").textContent = planName;
                        specificCard.querySelector(
                            ".price"
                        ).innerHTML = `$${planPrice} <span>${planRate}</span>`;
                        specificCard.querySelector(
                            ".plan-description"
                        ).textContent = planDescription;
                    }
                    updatePlanModal.style.display = "none";
                    updatePlanForm.reset(); // reseting form fields
                } else {
                    console.error("Error updating the plan: ", data.message);
                }
            })
            .catch((error) => console.error("Error:", error));
    });
}
pricingCardsContainer.addEventListener("click", (event) => {
    console.log(event.target);
    // console.log(event.target.closest(".pricing-card"));
    if (event.target.id !== "update-button") return;
    const card = event.target.closest(".pricing-card"); // finding closest card
    const planId = card.dataset.id; // getting card if from dataset
    if (!document.getElementById("updatePlanModal")) {
        createModal();
    }
    const updatePlanModal = document.getElementById("updatePlanModal");
    const modalForm = updatePlanModal.querySelector("#updatePlanForm");
    // populating update modal with data of clicked card
    modalForm.querySelector("#planId").value = planId;
    modalForm.querySelector("#name").value =
        card.querySelector("h3").textContent;
    const priceText = card.querySelector(".price").textContent;
    const priceValue = priceText.replace(/[^\d.-]/g, "");
    modalForm.querySelector("#price").value = priceValue;
    modalForm.querySelector("#description").value =
        card.querySelector(".plan-description").textContent;
    modalForm.querySelector("#rate").value =
        card.querySelector(".price span").textContent;
    // displaying the modal
    updatePlanModal.style.display = "flex";
});
removeItemBtn?.addEventListener("click", () => {
    const pricingCardsContainer = document.getElementById(
        "pricingCardsContainer"
    );
    let lastCard = pricingCardsContainer.lastElementChild;
    // If there is a last card, we proceed to delete it
    if (lastCard) {
        const id = lastCard.dataset.id;
        if (!id) {
            console.error("Plan ID not found!");
            return;
        }
        // making a delete request to server
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
