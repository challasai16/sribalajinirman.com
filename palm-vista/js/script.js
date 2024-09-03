


const plans = document.querySelectorAll(".select");

const planImage = document.querySelector(".plan-content");

plans.forEach((plan) => {
  plan.addEventListener("click", () => {
    const dataImage = plan.dataset["plan"];
    console.log(dataImage);

    plans.forEach((plan) => {
      plan.classList.remove("isactive");
    });
    plan.classList.add("isactive");

    const image = planImage.querySelectorAll(`.${dataImage}`);

    const allImages = planImage.querySelectorAll(".image");

    console.log(allImages);

    allImages.forEach((img) => {
      img.classList.remove("active-plan");
    });

    image.forEach((img) => {
      img.classList.add("active-plan");
    });
  });
});




// accordian section starts

// const accordiansLeft = document.querySelectorAll(
//   ".right-accodians>.specs-accordian"
// );

// accordiansLeft.forEach((accordian) => {
//   const title = accordian.querySelector(".acc-title");

//   title.addEventListener("click", () => {
//     accordiansLeft.forEach((accordian) => {
//       accordian.classList.remove("isopen");
//     });

//     accordian.classList.add("isopen");
  
//   });
  
    
// });

// const accordians = document.querySelectorAll(
//   ".left-accodians>.specs-accordian"
// );

// accordians.forEach((accordian) => {
//   const title = accordian.querySelector(".acc-title");

//   title.addEventListener("click", () => {
//     accordians.forEach((accordian) => {
//       accordian.classList.remove("isopen");
//     });

//     accordian.classList.add("isopen");
//   });
 
// });


// accordian end


// new code 


const accordiansLeft = document.querySelectorAll(".right-accodians > .specs-accordian");
const accordiansRight = document.querySelectorAll(".left-accodians > .specs-accordian");

function toggleAccordian(accordian) {
    accordian.classList.toggle("isopen");
}

function closeAccordians(accordians) {
    accordians.forEach((accordian) => {
        accordian.classList.remove("isopen");
    });
}

function handleAccordianClick(event) {
    const clickedAccordian = event.currentTarget.closest(".specs-accordian");

    if (window.innerWidth > 600) {
        if (clickedAccordian.parentElement.classList.contains("right-accodians")) {
            closeAccordians(accordiansLeft);
            openAccordian(clickedAccordian);
        } else if (clickedAccordian.parentElement.classList.contains("left-accodians")) {
            closeAccordians(accordiansRight);
            openAccordian(clickedAccordian);
        }
    } else {
        
        const allAccordians = [...accordiansLeft, ...accordiansRight].filter(
            (accordian) => accordian !== clickedAccordian
        );

        closeAccordians(allAccordians);
        toggleAccordian(clickedAccordian);
    }
}

function openAccordian(accordian) {
    accordian.classList.add("isopen");
}

accordiansLeft.forEach((accordian) => {
    accordian.querySelector(".acc-title").addEventListener("click", handleAccordianClick);
});

accordiansRight.forEach((accordian) => {
    accordian.querySelector(".acc-title").addEventListener("click", handleAccordianClick);
});

window.addEventListener("resize", () => {
    closeAccordians([...accordiansLeft, ...accordiansRight]);
    if (window.innerWidth > 600) {
        openAccordian(accordiansLeft[0]);
        openAccordian(accordiansRight[0]);
    } else {
        openAccordian(accordiansRight[0]);
    }
});

// new code end


let sbnclosemobileMenu = document.querySelector(".header-container .navbar img");
let mobilesbnMenu = document.querySelector(".header-container .navbar");
let opensbnMenubtn = document.querySelector(".sbn-iconbox");

opensbnMenubtn.addEventListener("click", ()=> {
     mobilesbnMenu.classList.add("navbar-manu");
    
});
sbnclosemobileMenu.addEventListener("click", ()=> {
     mobilesbnMenu.classList.remove("navbar-manu");
});



