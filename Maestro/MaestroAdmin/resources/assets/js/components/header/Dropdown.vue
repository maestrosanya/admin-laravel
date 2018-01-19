<template>
    <ul class="nav justify-content-end">
        <li class="nav-item" >
            <a href="">
                <slot name="user-name">

                </slot>
            </a>
            <ul class="header__dropdown nav">
                <slot>

                </slot>
            </ul>
        </li>

    </ul>
</template>

<script>
    export default {
        data() {
            return {
                textcomponent: "Компонент Vue запущен"
            }
        },

    }
</script>
