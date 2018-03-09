<template>
         <div>
             {{ greeting }}
         </div>
</template>

<script>
         export default {
                 data() {
                     return {
                             greeting: "I'm an example component!"
                     }
                 },
             mounted() {
                     console.log('Component mounted.')
                }
         }
</script>


