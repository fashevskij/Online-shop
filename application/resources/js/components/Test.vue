<script setup lang="ts">
import {ref} from 'vue'

let hello: string = 'hello vue';
ref(hello)
</script>

<template>
    <div class="container">
        <p class="text-bg-secondary text-center">{{hello}}</p>
    </div>
</template>
