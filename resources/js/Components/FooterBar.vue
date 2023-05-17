<script setup>
import { computed } from 'vue'
import { containerMaxW } from '@/config.js';
import BaseLevel from '@/Components/BaseLevel.vue'
import JustboilLogo from '@/Components/JustboilLogo.vue'

const year = computed(() => new Date().getFullYear())
</script>

<template>
  <footer class="py-2 px-6">
    <BaseLevel :class="containerMaxW">
      <div class="text-center md:text-left">
        <b>Copyright &copy;{{ year }}, <a
          href="#"
          target="_blank"
        >developed by</a></b>
        Salim Mbise
      </div>
      
    </BaseLevel>
  </footer>
</template>
