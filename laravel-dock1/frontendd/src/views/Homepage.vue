<template>
    <div>
        <navigation />

         <section class="page-section clearfix">
            <div class="container">
                <div class="intro">
                    <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="../assets/img/introa.jpg" alt="..." width="100" height="100" />
                    <div class="intro-text left-0 text-center bg-faded p-5 rounded">
                        <h2 class="section-heading mb-4">
                            <span class="section-heading-upper">The African Breeze</span>
                            <span class="section-heading-lower">Our Value</span>
                        </h2>
                        <p class="mb-3">We are a group of Africans in Russia, who aim at bringing Africa to your doorstep. The African food, clothes, products.. -just name it, bringing the African breeze to you!</p>
                        <div class="intro-button mx-auto"> <router-link to ="/Login"><a class="btn btn-primary btn-xl">Join Us Today!</a></router-link></div>
                    </div>
                   
                </div>
            </div>
        </section>
        <section class="page-section cta">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                        <div class="cta-inner bg-faded text-center rounded">
                            <h2 class="section-heading mb-4">
                                <span class="section-heading-upper">The AJ's</span>
                                <span class="section-heading-lower">Everything you dream of</span>
                            </h2>
                            <p class="mb-0">We offer the best of service to our customers. We bring both the consumer and the producer together. We make everything possible for you to have the fell of Africa here in Russia. Guess what? You can even order a cook! Even book for a hair cut.</p>
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
  name:"Homepage",
  components:{navigation, myfooter},
  data(){
    return{
      title: 'Homepage'
    }
  }
}
</script>