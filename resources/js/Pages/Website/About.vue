<template>
    <HeaderLayout />

    <FooterLayout />
</template>

<script>
import FooterLayout from "../../layouts/WebsiteLayouts/Footer.vue";
import HeaderLayout from "../../layouts/WebsiteLayouts/Header.vue";

export default {
    components: {
        HeaderLayout,
        FooterLayout,
    },
    setup() {},
};
</script>

<style scoped></style>
