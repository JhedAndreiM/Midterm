const cards = document.querySelectorAll(".card");
const infoSection = document.querySelector(".info");

const memberData = [
  {
    name: "Kristel Joy Bagtas",
    address: "Limay, Bataan",
    role: "Quality Assurance/ Documentor",
    description:
      "Ensures the system functions properly throughout development. ",
    funFact: "She believes that rest is also productive for a person.",
  },
  {
    name: "Jun Vincent Guillermo",
    address: "Balanga City, Bataan",
    role: "UI/UX Designer",
    description: "In-charge of making the mockups and wireframe",
    funFact: "Loves to swim and play games!",
  },
  {
    name: "Jhed Andrei Magdato",
    address: "Balanga City, Bataan",
    role: "Backend Developer",
    description:
      "Builds and maintains the server, database, and APIs to ensure the system runs smoothly.",
    funFact: "SCUAA for chess, hates training!",
  },
  {
    name: "Iris Jewel Dinglas",
    address: "Dinalupihan, Bataan",
    role: "System Analyst / Project Manager",
    description:
      "Designs workflows, ensures system alignment, and manages project timeline, resources, and team.",
    funFact: "The only vegetables she eats are yardlong beans and lettuce!",
  },
];

cards.forEach((card, index) => {
  card.addEventListener("mouseenter", () => {
    const member = memberData[index];

    infoSection.innerHTML = `
      <h1 class="syne-h1">MEMBERS</h1>
      <h2 class="syne-h1">
        <p><strong>Name:</strong> ${member.name}</p>
        <p><strong>Address:</strong> ${member.address}</p>
        <p><strong>Project Role:</strong> ${member.role}</p>
        <p><strong>Project Description:</strong> ${member.description}</p>
        <p><strong>Fun Fact:</strong> ${member.funFact}</p>
      </h2>
    `;
  });

  card.addEventListener("mouseleave", () => {
    infoSection.innerHTML = `
      <h1 class="syne-h1">MEMBERS</h1>
      <h2 class="syne-h1">
        <p><strong>Name:</strong> </p>
        <p><strong>Address:</strong> </p>
        <p><strong>Project Role:</strong> </p>
        <p><strong>Project Description:</strong> </p>
        <p><strong>Fun Fact:</strong> </p>
      </h2>
    `;
  });
});
