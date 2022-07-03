<template>

    <div class="page">
        <div class="p-5 bg-dark text-white">
            <div class="container">
                <!-- Avatar -->
                <div class="avatar">
                    <img src="https://picsum.photos/100/100" alt="">
                </div>
                <!-- Testo -->
                <div class="jumbo_text">
                    <h1 class="display-3">About Me</h1>
                    <p class="lead">Lorem ipsum dolor sit amet consectetur.</p>
                </div>
                <!-- Other info -->
                <hr class="my-2">
                <p>More info</p>
                <!-- Rotta a Posts -->
                <p class="lead">
                    <router-link class="btn btn-primary btn-md" :to="{name : 'posts'}">Leggi i miei posts</router-link>
                </p>
            </div>
        </div>
        <!-- Contenuto  -->
        <div class="container">
            <div class="content py-3">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque, nobis. Error porro alias nemo laborum illum expedita illo, enim rerum nulla? Nobis,
                aliquam. Sint, quia. Error beatae aut odio? Similique eum error magni, tempore aut, sit eos odit beatae, aliquid cum eius molestias sint non neque.
                Iusto consequuntur natus ad dolore, neque a obcaecati vero, et, facilis provident sit laudantium dicta. Quisquam optio autem architecto ea laboriosam
                nostrum nulla maiores assumenda porro officia cupiditate, facilis nemo qui blanditiis ipsa tempora excepturi nisi quasi accusantium. Similique labore sed
                nemo esse harum corrupti nisi, deleniti tenetur illum obcaecati aut. Provident, perferendis obcaecati.
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'About'
}
</script>
