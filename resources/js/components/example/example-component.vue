<style src="./example-component.css" scoped></style>

<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        Hello {{userName}}, your name backwards is "{{backwardsUserName}}".
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>


<script lang="ts" src="./example-component.ts"></script>
