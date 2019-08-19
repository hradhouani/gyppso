<template>
    <div class="row w-100">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body ">
                    <div class="form-group">
                        <input type="text"  @input="search()" v-model="text" class="form-control">
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio" v-model="selected" v-on:change="search()" checked value="0"
                               name="optradio" class="custom-control-input">
                        <label class="custom-control-label w-100" for="customRadio">All </label>
                    </div>


                    <div class="custom-control custom-radio" v-for="cat in cats">
                        <input type="radio" v-model="selected" v-bind:id="'customRadio'+cat.id" v-on:change="search()"
                               v-bind:value="cat.id" name="optradio" class="custom-control-input">
                        <label class="custom-control-label w-100" v-bind:for="'customRadio'+cat.id">{{cat.name}} <span
                            class="pull-right badge badge-primary">{{cat.count}}</span> </label>
                    </div>


                </div>
            </div>


        </div>
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-4 " v-for="product in products">
                    <div class="probootstrap-card with-hover">
                        <div class="probootstrap-card-media"><a v-bind:href="product.link"><img v-bind:src="product.image"
                                                                                             class="img-responsive img-border"></a>
                        </div>
                        <div class="probootstrap-card-text"><h2 class="probootstrap-card-heading mb0">
                            {{product.title}}</h2>
                            <p class="category">{{product.category.name}}</p>
                            <p><a v-bind:href="product.link">View details</a></p></div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "products",
        props: [
            'data', 'categories'
        ],
        data() {
            return {products: [], selected: 0, text:''};
        },
        methods: {

            search() {

                if (this.selected != 0) {
                    let p = JSON.parse(this.data);
                    this.products = p.filter(prod => prod.category_id == this.selected);


                    console.log(this.products);

                } else {

                    this.products = JSON.parse(this.data);
                }

         if (this.text !='')  this.products=this.products.filter(prod => prod.title.indexOf(this.text) >-1) ;

                console.log(this.selected)


            }

        },
        created() {

            this.products = JSON.parse(this.data);
            this.cats = JSON.parse(this.categories);

            console.log(JSON.parse(this.categories));
        }
    }
</script>

<style scoped>

</style>
