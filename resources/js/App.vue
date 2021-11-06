<template>
    <v-app id="main">
        <v-main>
            <v-app-bar app dark>
                <v-toolbar-title class="headline text-uppercase">
                    <span>Meine Kryptos</span>
                </v-toolbar-title>
                <v-spacer></v-spacer>
                <span class="mr-2">V0.1</span>
            </v-app-bar>
            <v-container>
                <router-view></router-view>
            </v-container>
        </v-main>
    </v-app>
</template>

<script>
export default {
    name: 'App'
};
</script>

<style></style>
