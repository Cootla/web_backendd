<template>
  <div>
    <navigation />

     <section class="page-section about-heading">
            <div class="container">
                <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="../assets/img/mini2.jpg" alt="..." />
                <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="../assets/img/mini3.jpg" alt="..." />
                <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="../assets/img/mini4.jpg" alt="..." />
                <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="../assets/img/mini6.jpg" alt="..." />
                <div class="about-heading-content">
                    <div class="row">
                        <div class="col-xl-9 col-lg-10 mx-auto">
                            <div class="bg-faded rounded p-5">
                                <h2 class="section-heading mb-4">
                                    <span class="section-heading-upper">Join The Team</span>
                                    <span class="section-heading-lower">About Us</span>
                                </h2>
                                <p>AJ's Businesss Hub was founded in 2021. When a group of students indulged in buying and selling of African wigs between Moscow and Belgorod State and also ordering of cooked food and as well as other African products, The AJ's taught it wise to start up an e-commerce to bring African together and aid in making the trade very easy and reliable. <p class="mb-0">
                                    We aim at expanding beyond the boaders of Russia and reaching to other neighburing countries. It is our goal to make the African man experience home in a different country.<p class="mb-0">
                            
                                <em>The AJ's ~ Life made Easy</em></p>
                                
                            </div>
                            <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="../assets/img/try1.jpg" alt="..." />
                            <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="../assets/img/try3.jpg" alt="..." />
                            <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="../assets/img/try4.jpg" alt="..." />
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <myfooter />
  </div>
</template>

<script>
import navigation from "@/components/navigation";
import myfooter from "@/components/myfooter";
export default {
  name:"About",
  components:{navigation, myfooter},
  data(){
    return{
      title: 'About'
    }
  }
}
</script>