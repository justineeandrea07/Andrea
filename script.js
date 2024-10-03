const teamMembers = [
    {
        name: "Jay Cris Hernandez",
        position: "Developer",
        description: "Jay Cris is an experienced software developer with a passion for frontend technologies.",
        phone: "000 111 222 123",
        website: "www.jaycris.com",
        email: "jay.cris@email.com",
        photo: "images/jay.jpg"
    },
    {
        name: "Rica Mae Ramirez",
        position: "Project Manager",
        description: "Rica Mae has been managing large-scale software projects for over 10 years.",
        phone: "000 111 222 345",
        website: "www.rica.com",
        email: "rica.mae@email.com",
        photo: "images/rica.jpg"
    },
    {
        name: "Justine Andrea Santos",
        position: "UX Designer",
        description: "Justine Andrea is a creative UX designer who brings ideas to life through user-friendly designs.",
        phone: "000 111 222 678",
        website: "www.justineandrea.com",
        email: "justine.andrea@email.com",
        photo: "images/andrea.jpg"
    },
    {
        name: "Vinz Ariscon",
        position: "QA Engineer",
        description: "Vinz ensures that every project is delivered bug-free and on time.",
        phone: "000 111 222 910",
        website: "www.vinz.com",
        email: "vinz@email.com",
        photo: "images/vinz.jpg"
    }
];

function showFeaturedMember(index) {
    const member = teamMembers[index];
    
    const featuredPhoto = document.getElementById('featured-photo');
    const featuredName = document.getElementById('featured-name');
    const featuredPosition = document.getElementById('featured-position');
    const featuredDescription = document.getElementById('featured-description');
    const featuredPhone = document.getElementById('featured-phone');
    const featuredWebsite = document.getElementById('featured-website');
    const featuredEmail = document.getElementById('featured-email');
    const featuredMember = document.getElementById('featured-member');

    // Apply hidden class for slomo effect
    featuredMember.classList.add('hidden');

    // After transition duration, update content
    setTimeout(() => {
        featuredPhoto.src = member.photo;
        featuredName.innerHTML = member.name;
        featuredPosition.innerHTML = member.position;
        featuredDescription.innerHTML = member.description;
        featuredPhone.innerHTML = member.phone;
        featuredWebsite.href = `https://${member.website}`;
        featuredWebsite.innerHTML = member.website;
        featuredEmail.href = `mailto:${member.email}`;
        featuredEmail.innerHTML = member.email;

        // Show content with slomo effect
        featuredMember.classList.remove('hidden');
    }, 500); // Matches the CSS transition duration (0.5s)
}
