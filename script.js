function trackParcel() {
    const timeline = document.getElementById("statusTimeline");
    timeline.innerHTML = "";

    const statuses = [
        "📦 Parcel Booked",
        "🚚 In Transit",
        "📍 Out for Delivery",
        "✅ Delivered"
    ];

    statuses.forEach((status, index) => {
        setTimeout(() => {
            const li = document.createElement("li");
            li.textContent = status;
            timeline.appendChild(li);
        }, index * 1000);
    });
}

// ================= Parcel Object =================
const parcel = {
    trackingId: "TRK12345",
    senderName: "Vasim",
    receiverName: "Rahul",
    status: "Booked",
    deliveryCost: 450
};

// Mandatory: console logging
console.log("Initial Parcel Object:", parcel);


console.log(parcel.trackingId);
console.log(parcel.status);


console.log(parcel["senderName"]);
console.log(parcel["deliveryCost"]);


function displayParcel() {
    document.getElementById("tracking").innerText =
        "Tracking ID: " + parcel.trackingId;

    document.getElementById("sender").innerText =
        "Sender: " + parcel.senderName;

    document.getElementById("receiver").innerText =
        "Receiver: " + parcel.receiverName;

    document.getElementById("status").innerText =
        "Status: " + parcel.status;

    document.getElementById("cost").innerText =
        "Delivery Cost: ₹" + parcel.deliveryCost;
}


function updateStatus() {
    parcel.status = "In Transit";        
    parcel["deliveryCost"] += 50;       

    console.log("Updated Parcel Object:", parcel);
    displayParcel();
}


window.onload = displayParcel;

let name=prompt("Are you a robot");