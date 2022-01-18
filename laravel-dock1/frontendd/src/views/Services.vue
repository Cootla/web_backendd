<template>
    <div>
        <navigation />
                   <section class="page-section">
            <div class="container">
                <div class="product-item">
                    <div class="product-item-title d-flex">
                        <div class="bg-faded p-5 d-flex ms-auto rounded">
                        
                            <h2 class="section-heading mb-0">
                            <a href="#">
                                <span class="section-heading-upper" >>&nbsp; Glowing Ebony</span>{{post.username}}
                            </a>
                                <span class="section-heading-lower">Skin and Hair care Products</span>
                            </h2>
                        </div>
                    </div>
                    <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="../assets/img/beauty.jpg" alt="..." />{{post.title}}{{post.products}}
                    <div class="product-item-description d-flex me-auto">
                        <div class="bg-faded p-5 rounded"><p class="mb-0">Meet various persons and order your African skin and hair care products. From the local shea butter to the cocoa butter, your favourite vaseline. Oh not forgetting the amazing abonike. Your shampoos are all covered and different hair products. You are just a click away!</p></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="page-section">
            <div class="container">
                <div class="product-item">
                    <div class="product-item-title d-flex">
                        <div class="bg-faded p-5 d-flex me-auto rounded">
                            <h2 class="section-heading mb-0">
                            <a href="#">
                                <span class="section-heading-upper">The African Pot</span>{{post.username}}
                            </a>
                                <span class="section-heading-lower">Kitchen & Food</span>
                            </h2>
                        </div>
                    </div>
                    <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="../assets/img/food.jpg" alt="..." />{{post.products}}
                    <div class="product-item-description d-flex ms-auto">
                        <div class="bg-faded p-5 rounded"><p class="mb-0">Nothing taste better than the African aroma of food. Nothing beats that. Order your food ingredients, the indigenous food stuffs. You can even book for a cook, and an amazing chef will be at you home within minutes. Don't beleft out get your fingers licking and your mouth watery!.</p></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="page-section">
            <div class="container">
                <div class="product-item">
                    <div class="product-item-title d-flex">
                        <div class="bg-faded p-5 d-flex ms-auto rounded">
                            <h2 class="section-heading mb-0">
                            <a href="#">
                                <span class="section-heading-upper">Symbolism Height</span>{{post.username}}
                            </a>
                                <span class="section-heading-lower">Clothes and accessories</span>
                            </h2>
                        </div>
                    </div>
                    <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="../assets/img/cloth.jpg" alt="..." />{{post.title}}{{post.products}}
                    <div class="product-item-description d-flex me-auto">
                        <div class="bg-faded p-5 rounded"><p class="mb-0">You need to look African. Showcasing your African attire is a great way to show your prestige and how proud you are to be an African. Get all your African wear and accessories. From the native kente to the agbada and beads around your wrist. Do not miss out to flaunt your beauty. </p></div>
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
  name:"Serve",
  components:{navigation, myfooter},
  data(){
    return{
      title: 'Serve'
    }
  }
}

import axios from 'axios';

export default {
  data() {
    return {
      posts: [],
      errors: []
    }
  },

  // Fetches posts when the component is created.
  created() {
    axios.get(`http://jsonplaceholder.typicode.com/posts`)
    .then(response => {
      // JSON responses are automatically parsed.
      this.posts = response.data
    })
    .catch(e => {
      this.errors.push(e)
    })
  }
}
</script>