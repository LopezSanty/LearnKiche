<template>
    <mdb-container class="mt-5">
        <mdb-container>
            <mdb-row class="mdb-lightbox">
                <mdb-col md="4" @click.native="showLightbox2(0)">
                    <figure>
                        <img src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(145).jpg" class="img-fluid" alt="">
                    </figure>
                </mdb-col>
                <mdb-col md="4" @click.native="showLightbox2(1)">
                    <figure>
                        <img src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(150).jpg" class="img-fluid" alt="">
                    </figure>
                </mdb-col>
                <mdb-col md="4" @click.native="showLightbox2(2)">
                    <figure>
                        <img src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(152).jpg" class="img-fluid" alt="">
                    </figure>
                </mdb-col>
                <mdb-col md="4" @click.native="showLightbox2(3)">
                    <figure>
                        <img src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(42).jpg" class="img-fluid" alt="">
                    </figure>
                </mdb-col>
                <mdb-col md="4" @click.native="showLightbox2(4)">
                    <figure>
                        <img src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(151).jpg" class="img-fluid" alt="">
                    </figure>
                </mdb-col>
                <mdb-col md="4" @click.native="showLightbox2(5)">
                    <figure>
                        <img src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(40).jpg" class="img-fluid" alt="">
                    </figure>
                </mdb-col>
                <mdb-col md="4" @click.native="showLightbox2(6)">
                    <figure>
                        <img src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(148).jpg" class="img-fluid" alt="">
                    </figure>
                </mdb-col>
                <mdb-col md="4" @click.native="showLightbox2(7)">
                    <figure>
                        <img src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(147).jpg" class="img-fluid" alt="">
                    </figure>
                </mdb-col>
                <mdb-col md="4" @click.native="showLightbox2(8)">
                    <figure>
                        <img src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(149).jpg" class="img-fluid" alt="">
                    </figure>
                </mdb-col>
            </mdb-row>
        </mdb-container>
        <mdb-lightbox
            :visible="visible2"
            :imgs="imgs2"
            :index="index2"
            @hide="handleHide2">
        </mdb-lightbox>
    </mdb-container>
</template>

<script>
    import { mdbContainer, mdbRow, mdbCol, mdbIcon, mdbBtn, mdbLightbox, mdbCarousel, mdbCard, mdbModal, mdbModalHeader, mdbModalTitle, mdbModalBody, mdbModalFooter, mdbNavItem } from "mdbvue";
    export default {
        name: "GalleryPage",
        data() {
            return {
                imgs2: [
                    'https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(145).jpg',
                    'https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(150).jpg',
                    'https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(152).jpg',
                    'https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(42).jpg',
                    'https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(151).jpg',
                    'https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(40).jpg',
                    'https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(148).jpg',
                    'https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(147).jpg',
                    'https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(149).jpg'
                ],
                visible2: false,
                index2: 0
            };
        },
        methods: {
            showLightbox2(index2) {
                this.index2 = index2;
                this.visible2 = true;
            },
            handleHide2() {
                this.visible2 = false;
            }
        },
        components: {
            mdbContainer,
            mdbRow,
            mdbCol,
            mdbIcon,
            mdbBtn,
            mdbLightbox,
            mdbCarousel,
            mdbCard,
            mdbModal,
            mdbModalHeader,
            mdbModalTitle,
            mdbModalBody,
            mdbModalFooter,
            mdbNavItem
        }
    }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
    @media (min-width: 768px) {
        .carousel-multi-item-2 .col-md-3 {
            float: left;
            width: 25%;
            max-width: 100%; } }

    .carousel-multi-item-2 .card img {
        border-radius: 2px; }

    figure {
        cursor: pointer;
    }
</style>
