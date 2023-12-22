<style>
/* Schedule */
:root {
    --lineWidth:0px;
    --offwhite: #f5f7f9;
    --white: #ffffff;
    --grey: #8A8F9B;
    --green: #8bbba2;
    --purple: #b488df;
    --orange: #f77650;
    --skin: #f2b699;
    --brown: #b15a59;
    --ligtPurple: #d0b7e8;
    --dark-skin:#f5ceb4;
    --dark-brown: #8b5a59;
}
body{
    background-color: var(--white);
}
.container-main{
    display: flex;
    top: 65%;
    left: 50%;
    transform: translate(-50%, 0%);
    position: relative;
    min-width: 40vw;
    width: 90%;
    height: 80%;
    
    background-color: var(--offwhite);
    border-radius: 10px;
    box-shadow: 5px 7px 58px 11px rgba(0, 0, 0, 0.217);
}
.container-grid {
   display: grid;
    width: 100%;
    height: auto;
    grid-template-columns: 50px repeat(7, 1fr);
    grid-auto-flow: row;
    grid-template-rows: minmax(0, auto);
}
.time::after {
    content: "";
    position: absolute;
    width: var(--lineWidth);
    left: 45px;
    right: 0px;
    border-top: 1px dashed rgb(202, 202, 202);
    margin-top: 9.5px;
    z-index: 0;
}

.grid-item {
    display: flex;
    min-height: 55px;
    min-width: 20px;
    margin: 3px;
    padding: 10px;
    justify-content: center;
    align-items: center;
    text-align: center;
    border-radius: 7px;
    font-size: small;
    box-shadow: 0px 0px 31px -3px rgba(0, 0, 0, 0.169);
    z-index: 1;
}

.days{
    color: var(--grey);
    font-size: small;
    min-width: 60px;
    align-self: center;
    justify-content: center;
    margin-top: 20px;
    margin-bottom: 10px;
}

.time{
    color: var(--grey);
    font-size: small;
    margin-top: -9.5px;
    margin-bottom: 10px;
    margin-left: 10px;
}
.hide{
    width: 0;
    height: 0;
    overflow: hidden;
    margin: 0;
    padding: 0;
}

@media only screen and (max-width: 600px) {
    .container-main{
        width: 100vw;
        height: auto;
        border-radius: 5px;
    }
    .grid-item {
        font-size: x-small;
    }
    .days{
        font-size: x-small;
    }
    .time{
        font-size: x-small;
        margin-bottom: 9px;
    }
}

/* Navbar Mini */
.navbar2 {
    background-color: #333;
    overflow: hidden;
}

.navbar2 a {
    float: right;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.navbar2 a:hover {
    background-color: #ddd;
    color: black;
}

/*
! tailwindcss v3.3.3 | MIT License | https://tailwindcss.com
*/
*,:after,:before {
    box-sizing: border-box;
    border: 0 solid #e5e7eb
}

:after,:before {
    --tw-content: ""
}

html {
    line-height: 1.5;
    -webkit-text-size-adjust: 100%;
    tab-size: 4;
    font-family: ui-sans-serif,system-ui, Helvetica,Arial,sans-serif;
    -webkit-font-feature-settings: normal;
    font-feature-settings: normal;
    font-variation-settings: normal
}

body {
    margin: 0;
    line-height: inherit
}

hr {
    height: 0;
    color: inherit;
    border-top-width: 1px
}

abbr:where([title]) {
    -webkit-text-decoration: underline dotted;
    text-decoration: underline dotted
}

h1,h2,h3,h4,h5,h6 {
    font-size: inherit;
    font-weight: inherit
}

a {
    color: inherit;
    text-decoration: inherit
}

b,strong {
    font-weight: bolder
}

code,kbd,pre,samp {
    font-family: ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,Liberation Mono,Courier New,monospace;
    font-size: 1em
}

small {
    font-size: 80%
}

sub,sup {
    font-size: 75%;
    line-height: 0;
    position: relative;
    vertical-align: baseline
}

sub {
    bottom: -.25em
}

sup {
    top: -.5em
}

table {
    text-indent: 0;
    border-color: inherit;
    border-collapse: collapse
}

button,input,optgroup,select,textarea {
    font-family: inherit;
    -webkit-font-feature-settings: inherit;
    font-feature-settings: inherit;
    font-variation-settings: inherit;
    font-size: 100%;
    font-weight: inherit;
    line-height: inherit;
    color: inherit;
    margin: 0;
    padding: 0
}

button,select {
    text-transform: none
}

[type=button],[type=reset],[type=submit],button {
    -webkit-appearance: button;
    appearance: button;
    background-color: transparent;
    background-image: none;
}

:-moz-focusring {
    outline: auto
}

:-moz-ui-invalid {
    box-shadow: none
}

progress {
    vertical-align: baseline
}

::-webkit-inner-spin-button,::-webkit-outer-spin-button {
    height: auto
}

[type="search"] {
    -webkit-appearance: textfield;
    appearance: textfield;
    outline-offset: -2px;
}

::-webkit-search-decoration {
    -webkit-appearance: none
}

::-webkit-file-upload-button {
    -webkit-appearance: button;
    font: inherit
}

summary {
    display: list-item
}

blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre {
    margin: 0
}

fieldset {
    margin: 0
}

fieldset,legend {
    padding: 0
}

menu,ol,ul {
    list-style: none;
    margin: 0;
    padding: 0
}

dialog {
    padding: 0
}

textarea {
    resize: vertical
}

input::-webkit-input-placeholder,textarea::-webkit-input-placeholder {
    color: #9ca3af
}

input::placeholder,textarea::placeholder {
    color: #9ca3af
}

[role=button],button {
    cursor: pointer
}

.nav-item:hover, .nav-item.active {
            background-color: navy;
}
:disabled {
    cursor: default
}

audio,canvas,embed,iframe,img,object,svg,video {
    display: block;
}

img,video {
    max-width: 100%;
    height: auto
}

[hidden] {
    display: none
}


input::-webkit-input-placeholder,textarea::-webkit-input-placeholder {
    color: #6b7280;
    opacity: 1
}

input::placeholder,textarea::placeholder {
    color: #6b7280;
    opacity: 1
}

::-webkit-datetime-edit-fields-wrapper {
    padding: 0
}

::-webkit-date-and-time-value {
    min-height: 1.5em;
    text-align: inherit
}

::-webkit-datetime-edit {
    display: inline-flex
}

::-webkit-datetime-edit,::-webkit-datetime-edit-day-field,::-webkit-datetime-edit-hour-field,::-webkit-datetime-edit-meridiem-field,::-webkit-datetime-edit-millisecond-field,::-webkit-datetime-edit-minute-field,::-webkit-datetime-edit-month-field,::-webkit-datetime-edit-second-field,::-webkit-datetime-edit-year-field {
    padding-top: 0;
    padding-bottom: 0
}

select {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e");
    background-position: right .5rem center;
    background-repeat: no-repeat;
    background-size: 1.5em 1.5em;
    padding-right: 2.5rem;
    -webkit-print-color-adjust: exact;
    print-color-adjust: exact
}

[multiple],[size]:where(select:not([size="1"])) {
    background-image: none;
    background-position: 0 0;
    background-repeat: unset;
    background-size: initial;
    padding-right: .75rem;
    -webkit-print-color-adjust: unset;
    print-color-adjust: unset
}


::-webkit-backdrop {
    --tw-border-spacing-x: 0;
    --tw-border-spacing-y: 0;
    --tw-translate-x: 0;
    --tw-translate-y: 0;
    --tw-rotate: 0;
    --tw-skew-x: 0;
    --tw-skew-y: 0;
    --tw-scale-x: 1;
    --tw-scale-y: 1;
    --tw-pan-x: ;
    --tw-pan-y: ;
    --tw-pinch-zoom: ;
    --tw-scroll-snap-strictness: proximity;
    --tw-gradient-from-position: ;
    --tw-gradient-via-position: ;
    --tw-gradient-to-position: ;
    --tw-ordinal: ;
    --tw-slashed-zero: ;
    --tw-numeric-figure: ;
    --tw-numeric-spacing: ;
    --tw-numeric-fraction: ;
    --tw-ring-inset: ;
    --tw-ring-offset-width: 0px;
    --tw-ring-offset-color: #fff;
    --tw-ring-color: rgba(59,130,246,.5);
    --tw-ring-offset-shadow: 0 0 #0000;
    --tw-ring-shadow: 0 0 #0000;
    --tw-shadow: 0 0 #0000;
    --tw-shadow-colored: 0 0 #0000;
    --tw-blur: ;
    --tw-brightness: ;
    --tw-contrast: ;
    --tw-grayscale: ;
    --tw-hue-rotate: ;
    --tw-invert: ;
    --tw-saturate: ;
    --tw-sepia: ;
    --tw-drop-shadow: ;
    --tw-backdrop-blur: ;
    --tw-backdrop-brightness: ;
    --tw-backdrop-contrast: ;
    --tw-backdrop-grayscale: ;
    --tw-backdrop-hue-rotate: ;
    --tw-backdrop-invert: ;
    --tw-backdrop-opacity: ;
    --tw-backdrop-saturate: ;
    --tw-backdrop-sepia:
}

::backdrop {
    --tw-border-spacing-x: 0;
    --tw-border-spacing-y: 0;
    --tw-translate-x: 0;
    --tw-translate-y: 0;
    --tw-rotate: 0;
    --tw-skew-x: 0;
    --tw-skew-y: 0;
    --tw-scale-x: 1;
    --tw-scale-y: 1;
    --tw-pan-x: ;
    --tw-pan-y: ;
    --tw-pinch-zoom: ;
    --tw-scroll-snap-strictness: proximity;
    --tw-gradient-from-position: ;
    --tw-gradient-via-position: ;
    --tw-gradient-to-position: ;
    --tw-ordinal: ;
    --tw-slashed-zero: ;
    --tw-numeric-figure: ;
    --tw-numeric-spacing: ;
    --tw-numeric-fraction: ;
    --tw-ring-inset: ;
    --tw-ring-offset-width: 0px;
    --tw-ring-offset-color: #fff;
    --tw-ring-color: rgba(59,130,246,.5);
    --tw-ring-offset-shadow: 0 0 #0000;
    --tw-ring-shadow: 0 0 #0000;
    --tw-shadow: 0 0 #0000;
    --tw-shadow-colored: 0 0 #0000;
    --tw-blur: ;
    --tw-brightness: ;
    --tw-contrast: ;
    --tw-grayscale: ;
    --tw-hue-rotate: ;
    --tw-invert: ;
    --tw-saturate: ;
    --tw-sepia: ;
    --tw-drop-shadow: ;
    --tw-backdrop-blur: ;
    --tw-backdrop-brightness: ;
    --tw-backdrop-contrast: ;
    --tw-backdrop-grayscale: ;
    --tw-backdrop-hue-rotate: ;
    --tw-backdrop-invert: ;
    --tw-backdrop-opacity: ;
    --tw-backdrop-saturate: ;
    --tw-backdrop-sepia:
}

.container {
    width: 100%
}

.aspect-h-16 {
    --tw-aspect-h: 16
}

.aspect-w-9 {
    position: relative;
    padding-bottom: calc(var(--tw-aspect-h) / var(--tw-aspect-w) * 100%);
    --tw-aspect-w: 9
}

.aspect-w-9>* {
    position: absolute;
    height: 100%;
    width: 100%;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0
}

.btn {
    display: inline-flex;
    align-items: center;
    border-radius: .375rem;
    border-width: 1px;
    border-color: transparent;
    --tw-bg-opacity: 1;
    background-color: rgb(0 64 140/var(--tw-bg-opacity));
    padding: .5rem 1rem;
    font-size: .875rem;
    line-height: 1.25rem;
    font-weight: 500;
    --tw-text-opacity: 1;
    color: rgb(255 255 255/var(--tw-text-opacity));
    --tw-shadow: 0 1px 2px 0 rgba(0,0,0,.05);
    --tw-shadow-colored: 0 1px 2px 0 var(--tw-shadow-color);
    box-shadow: var(--tw-ring-offset-shadow,0 0 #0000),var(--tw-ring-shadow,0 0 #0000),var(--tw-shadow)
}

.btn:focus {
    outline: 2px solid transparent;
    outline-offset: 2px;
    --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
    --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);
    box-shadow: var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow,0 0 #0000);
    --tw-ring-opacity: 1;
    --tw-ring-color: rgb(244 63 94/var(--tw-ring-opacity));
    --tw-ring-offset-width: 2px
}

.sr-only {
    position: absolute;
    width: 1px;
    height: 1px;
    padding: 0;
    margin: -1px;
    overflow: hidden;
    clip: rect(0,0,0,0);
    white-space: nowrap;
    border-width: 0
}

.pointer-events-none {
    pointer-events: none
}

.\!fixed {
    position: fixed!important
}

.fixed {
    position: fixed
}

.absolute {
    position: absolute
}

.relative {
    position: relative
}

.sticky {
    position: -webkit-sticky;
    position: sticky
}

.inset-0 {
    inset: 0
}

.inset-y-0 {
    top: 0;
    bottom: 0
}

.bottom-0 {
    bottom: 0
}

.left-0 {
    left: 0
}

.right-0 {
    right: 0
}

.top-0 {
    top: 0
}

.z-10 {
    z-index: 10
}

.z-20 {
    z-index: 20
}

.col-span-1 {
    grid-column: span 1/span 1
}

.col-span-2 {
    grid-column: span 2/span 2
}

.col-span-3 {
    grid-column: span 3/span 3
}

.-m-1 {
    margin: -.25rem
}

.-m-1\.5 {
    margin: -.375rem
}

.-m-2 {
    margin: -.5rem
}

.-m-2\.5 {
    margin: -.625rem
}

.m-12 {
    margin: 3rem
}

.m-2 {
    margin: .5rem
}

.m-auto {
    margin: auto
}

.-mx-3 {
    margin-left: -.75rem;
    margin-right: -.75rem
}

.-my-6 {
    margin-top: -1.5rem;
    margin-bottom: -1.5rem
}

.mx-1 {
    margin-left: .25rem;
    margin-right: .25rem
}

.mx-16 {
    margin-left: 4rem;
    margin-right: 4rem
}

.mx-2 {
    margin-left: .5rem;
    margin-right: .5rem
}

.mx-3 {
    margin-left: .75rem;
    margin-right: .75rem
}

.mx-4 {
    margin-left: 1rem;
    margin-right: 1rem
}

.mx-5 {
    margin-left: 1.25rem;
    margin-right: 1.25rem
}

.mx-auto {
    margin-left: auto;
    margin-right: auto
}

.my-16 {
    margin-top: 4rem;
    margin-bottom: 4rem
}

.my-2 {
    margin-top: .5rem;
    margin-bottom: .5rem
}

.my-4 {
    margin-top: 1rem;
    margin-bottom: 1rem
}

.my-5 {
    margin-top: 1.25rem;
    margin-bottom: 1.25rem
}

.-mt-1 {
    margin-top: -.25rem
}

.mb-1 {
    margin-bottom: .25rem
}

.mb-16 {
    margin-bottom: 4rem
}

.mb-2 {
    margin-bottom: .5rem
}

.mb-4 {
    margin-bottom: 1rem
}

.mb-5 {
    margin-bottom: 1.25rem
}

.mb-6 {
    margin-bottom: 1.5rem
}

.ml-0 {
    margin-left: 0
}

.ml-1 {
    margin-left: .25rem
}

.ml-10 {
    margin-left: 2.5rem
}

.ml-2 {
    margin-left: .5rem
}

.ml-3 {
    margin-left: .75rem
}

.ml-5 {
    margin-left: 1.25rem
}

.ml-9 {
    margin-left: 2.25rem
}

.mr-0 {
    margin-right: 0
}

.mr-2 {
    margin-right: .5rem
}

.mr-4 {
    margin-right: 1rem
}

.mt-1 {
    margin-top: .25rem
}

.mt-10 {
    margin-top: 2.5rem
}

.mt-12 {
    margin-top: 3rem
}

.mt-16 {
    margin-top: 4rem
}

.mt-2 {
    margin-top: .5rem
}

.mt-3 {
    margin-top: .75rem
}

.mt-4 {
    margin-top: 1rem
}

.mt-5 {
    margin-top: 1.25rem
}

.mt-6 {
    margin-top: 1.5rem
}

.mt-8 {
    margin-top: 2rem
}

.block {
    display: block
}

.inline-block {
    display: inline-block
}

.flex {
    display: flex;
}

.inline-flex {
    display: inline-flex
}

.flow-root {
    display: flow-root
}

.grid {
    display: grid
}

.hidden {
    display: none
}

.h-1 {
    height: .25rem
}

.h-2\/3 {
    height: 66.666667%
}

.h-20 {
    height: 5rem
}

.h-3 {
    height: .75rem
}

.h-32 {
    height: 8rem
}

.h-4 {
    height: 1rem
}

.h-40 {
    height: 10rem
}

.h-48 {
    height: 12rem
}

.h-5 {
    height: 1.25rem
}

.h-6 {
    height: 1.5rem
}

.h-8 {
    height: 2rem
}

.h-auto {
    height: auto
}

.h-full {
    height: 100%
}

.h-screen {
    height: 100vh
}

.max-h-60 {
    max-height: 15rem
}

.w-1\/12 {
    width: 8.333333%
}

.w-1\/2 {
    width: 50%
}

.w-1\/4 {
    width: 25%
}

.w-1\/6 {
    width: 16.666667%
}

.w-2\/3 {
    width: 66.666667%
}

.w-20 {
    width: 5rem
}

.w-3\/4 {
    width: 75%
}

.w-4 {
    width: 1rem
}

.w-40 {
    width: 10rem
}

.w-48 {
    width: 12rem
}

.w-5 {
    width: 1.25rem
}

.w-6 {
    width: 1.5rem
}

.w-8 {
    width: 2rem
}

.w-\[800px\] {
    width: 800px
}

.w-auto {
    width: auto
}

.w-full {
    width: 100%
}

.w-max {
    width: -webkit-max-content;
    width: max-content
}

.w-min {
    width: -webkit-min-content;
    width: min-content
}

.w-screen {
    width: 100vw
}

.max-w-4xl {
    max-width: 56rem
}

.max-w-prose {
    max-width: 65ch
}

.flex-1 {
    flex: 1 1 0%
}

.flex-none {
    flex: none
}

.flex-shrink-0 {
    flex-shrink: 0
}

.origin-top-right {
    -webkit-transform-origin: top right;
    transform-origin: top right
}

.scale-100 {
    --tw-scale-x: 1;
    --tw-scale-y: 1
}

.scale-100,.scale-95 {
    -webkit-transform: translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
    transform: translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
}

.scale-95 {
    --tw-scale-x: .95;
    --tw-scale-y: .95
}

.transform {
    -webkit-transform: translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
    transform: translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
}

@-webkit-keyframes bounce {
    0%,to {
        -webkit-transform: translateY(-25%);
        transform: translateY(-25%);
        -webkit-animation-timing-function: cubic-bezier(.8,0,1,1);
        animation-timing-function: cubic-bezier(.8,0,1,1)
    }

    50% {
        -webkit-transform: none;
        transform: none;
        -webkit-animation-timing-function: cubic-bezier(0,0,.2,1);
        animation-timing-function: cubic-bezier(0,0,.2,1)
    }
}

@keyframes bounce {
    0%,to {
        -webkit-transform: translateY(-25%);
        transform: translateY(-25%);
        -webkit-animation-timing-function: cubic-bezier(.8,0,1,1);
        animation-timing-function: cubic-bezier(.8,0,1,1)
    }

    50% {
        -webkit-transform: none;
        transform: none;
        -webkit-animation-timing-function: cubic-bezier(0,0,.2,1);
        animation-timing-function: cubic-bezier(0,0,.2,1)
    }
}

.animate-bounce {
    -webkit-animation: bounce 1s infinite;
    animation: bounce 1s infinite
}

@-webkit-keyframes marquee {
    0% {
        -webkit-transform: translateX(0);
        transform: translateX(0)
    }

    to {
        -webkit-transform: translateX(-100%);
        transform: translateX(-100%)
    }
}

@keyframes marquee {
    0% {
        -webkit-transform: translateX(0);
        transform: translateX(0)
    }

    to {
        -webkit-transform: translateX(-100%);
        transform: translateX(-100%)
    }
}

.animate-marquee {
    -webkit-animation: marquee 25s linear infinite;
    animation: marquee 25s linear infinite
}

@-webkit-keyframes marquee2 {
    0% {
        -webkit-transform: translateX(100%);
        transform: translateX(100%)
    }

    to {
        -webkit-transform: translateX(0);
        transform: translateX(0)
    }
}

@keyframes marquee2 {
    0% {
        -webkit-transform: translateX(100%);
        transform: translateX(100%)
    }

    to {
        -webkit-transform: translateX(0);
        transform: translateX(0)
    }
}

.animate-marquee2 {
    -webkit-animation: marquee2 25s linear infinite;
    animation: marquee2 25s linear infinite
}

@-webkit-keyframes spin {
    to {
        -webkit-transform: rotate(1turn);
        transform: rotate(1turn)
    }
}

@keyframes spin {
    to {
        -webkit-transform: rotate(1turn);
        transform: rotate(1turn)
    }
}

.animate-spin {
    -webkit-animation: spin 1s linear infinite;
    animation: spin 1s linear infinite
}

.cursor-default {
    cursor: default
}

.cursor-pointer {
    cursor: pointer
}

.select-none {
    -webkit-user-select: none;
    user-select: none
}

.list-outside {
    list-style-position: outside
}

.list-none {
    list-style-type: none
}

.grid-cols-1 {
    grid-template-columns: repeat(1,minmax(0,1fr))
}

.grid-cols-2 {
    grid-template-columns: repeat(2,minmax(0,1fr))
}

.grid-cols-3 {
    grid-template-columns: repeat(3,minmax(0,1fr))
}

.grid-cols-4 {
    grid-template-columns: repeat(4,minmax(0,1fr))
}

.flex-row {
    flex-direction: row
}

.flex-col {
    flex-direction: column
}

.flex-wrap {
    flex-wrap: wrap;
}

.items-start {
    align-items: flex-start
}

.items-end {
    align-items: flex-end
}

.items-center {
    align-items: center
}

.justify-start {
    justify-content: flex-start
}

.justify-end {
    justify-content: flex-end
}

.justify-center {
    justify-content: center
}

.justify-between {
    justify-content: space-between
}

.justify-around {
    justify-content: space-around
}

.justify-evenly {
    justify-content: space-evenly
}

.gap-2 {
    gap: .5rem
}

.gap-4 {
    gap: 1rem
}

.gap-8 {
    gap: 2rem
}

.space-x-0>:not([hidden])~:not([hidden]) {
    --tw-space-x-reverse: 0;
    margin-right: calc(0px * var(--tw-space-x-reverse));
    margin-left: calc(0px * calc(1 - var(--tw-space-x-reverse)))
}

.space-x-10>:not([hidden])~:not([hidden]) {
    --tw-space-x-reverse: 0;
    margin-right: calc(2.5rem * var(--tw-space-x-reverse));
    margin-left: calc(2.5rem * calc(1 - var(--tw-space-x-reverse)))
}

.space-x-2>:not([hidden])~:not([hidden]) {
    --tw-space-x-reverse: 0;
    margin-right: calc(.5rem * var(--tw-space-x-reverse));
    margin-left: calc(.5rem * calc(1 - var(--tw-space-x-reverse)))
}

.space-x-4>:not([hidden])~:not([hidden]) {
    --tw-space-x-reverse: 0;
    margin-right: calc(1rem * var(--tw-space-x-reverse));
    margin-left: calc(1rem * calc(1 - var(--tw-space-x-reverse)))
}

.space-x-6>:not([hidden])~:not([hidden]) {
    --tw-space-x-reverse: 0;
    margin-right: calc(1.5rem * var(--tw-space-x-reverse));
    margin-left: calc(1.5rem * calc(1 - var(--tw-space-x-reverse)))
}

.space-y-1>:not([hidden])~:not([hidden]) {
    --tw-space-y-reverse: 0;
    margin-top: calc(.25rem * calc(1 - var(--tw-space-y-reverse)));
    margin-bottom: calc(.25rem * var(--tw-space-y-reverse))
}

.space-y-10>:not([hidden])~:not([hidden]) {
    --tw-space-y-reverse: 0;
    margin-top: calc(2.5rem * calc(1 - var(--tw-space-y-reverse)));
    margin-bottom: calc(2.5rem * var(--tw-space-y-reverse))
}

.space-y-2>:not([hidden])~:not([hidden]) {
    --tw-space-y-reverse: 0;
    margin-top: calc(.5rem * calc(1 - var(--tw-space-y-reverse)));
    margin-bottom: calc(.5rem * var(--tw-space-y-reverse))
}

.space-y-4>:not([hidden])~:not([hidden]) {
    --tw-space-y-reverse: 0;
    margin-top: calc(1rem * calc(1 - var(--tw-space-y-reverse)));
    margin-bottom: calc(1rem * var(--tw-space-y-reverse))
}

.space-y-8>:not([hidden])~:not([hidden]) {
    --tw-space-y-reverse: 0;
    margin-top: calc(2rem * calc(1 - var(--tw-space-y-reverse)));
    margin-bottom: calc(2rem * var(--tw-space-y-reverse))
}

.divide-x>:not([hidden])~:not([hidden]) {
    --tw-divide-x-reverse: 0;
    border-right-width: calc(1px * var(--tw-divide-x-reverse));
    border-left-width: calc(1px * calc(1 - var(--tw-divide-x-reverse)))
}

.divide-y>:not([hidden])~:not([hidden]) {
    --tw-divide-y-reverse: 0;
    border-top-width: calc(1px * calc(1 - var(--tw-divide-y-reverse)));
    border-bottom-width: calc(1px * var(--tw-divide-y-reverse))
}

.divide-gray-100>:not([hidden])~:not([hidden]) {
    --tw-divide-opacity: 1;
    border-color: rgb(243 244 246/var(--tw-divide-opacity))
}

.self-start {
    align-self: flex-start
}

.self-end {
    align-self: flex-end
}

.self-center {
    align-self: center
}

.overflow-auto {
    overflow: auto
}

.overflow-hidden {
    overflow: hidden
}

.overflow-y-auto {
    overflow-y: auto
}

.overflow-x-hidden {
    overflow-x: hidden
}

.truncate {
    overflow: hidden;
    text-overflow: ellipsis
}

.truncate,.whitespace-nowrap {
    white-space: nowrap
}

.rounded {
    border-radius: .25rem
}

.rounded-2xl {
    border-radius: 1rem
}

.rounded-full {
    border-radius: 9999px
}

.rounded-lg {
    border-radius: .5rem
}

.rounded-md {
    border-radius: .375rem
}

.rounded-xl {
    border-radius: .75rem
}

.rounded-b-3xl {
    border-bottom-left-radius: 1.5rem
}

.rounded-b-3xl,.rounded-br-3xl {
    border-bottom-right-radius: 1.5rem
}

.rounded-tl-3xl {
    border-top-left-radius: 1.5rem
}

.border {
    border-width: 1px
}

.border-0 {
    border-width: 0
}

.border-b {
    border-bottom-width: 1px
}

.border-b-2 {
    border-bottom-width: 2px
}

.border-t {
    border-top-width: 1px
}

.border-none {
    border-style: none
}

.border-\[\#717171\] {
    --tw-border-opacity: 1;
    border-color: rgb(113 113 113/var(--tw-border-opacity))
}

.border-black {
    --tw-border-opacity: 1;
    border-color: rgb(0 0 0/var(--tw-border-opacity))
}

.border-brand {
    --tw-border-opacity: 1;
    border-color: rgb(0 64 140/var(--tw-border-opacity))
}

.border-gray-200 {
    --tw-border-opacity: 1;
    border-color: rgb(229 231 235/var(--tw-border-opacity))
}

.border-gray-300 {
    --tw-border-opacity: 1;
    border-color: rgb(209 213 219/var(--tw-border-opacity))
}

.border-transparent {
    border-color: transparent
}

.border-white {
    --tw-border-opacity: 1;
    border-color: rgb(255 255 255/var(--tw-border-opacity))
}

.bg-\[\#1A1A1A\] {
    --tw-bg-opacity: 1;
    background-color: rgb(26 26 26/var(--tw-bg-opacity))
}

.bg-\[\#1D1C1C\] {
    --tw-bg-opacity: 1;
    background-color: rgb(29 28 28/var(--tw-bg-opacity))
}

.bg-\[\#313131\] {
    --tw-bg-opacity: 1;
    background-color: rgb(49 49 49/var(--tw-bg-opacity))
}

.bg-\[\#D9D9D9\] {
    --tw-bg-opacity: 1;
    background-color: rgb(217 217 217/var(--tw-bg-opacity))
}

.bg-\[\#EAEAEA\] {
    --tw-bg-opacity: 1;
    background-color: rgb(234 234 234/var(--tw-bg-opacity))
}

.bg-\[\#d6d6d6\] {
    --tw-bg-opacity: 1;
    background-color: rgb(214 214 214/var(--tw-bg-opacity))
}

.bg-black {
    --tw-bg-opacity: 1;
    background-color: rgb(0 0 0/var(--tw-bg-opacity))
}

.bg-black\/80 {
    background-color: rgba(0,0,0,.8)
}

.bg-brand {
    --tw-bg-opacity: 1;
    background-color: rgb(0 64 140/var(--tw-bg-opacity))
}

.bg-dark {
    --tw-bg-opacity: 1;
    background-color: rgb(56 56 56/var(--tw-bg-opacity))
}

.bg-gray-100 {
    --tw-bg-opacity: 1;
    background-color: rgb(243 244 246/var(--tw-bg-opacity))
}

.bg-gray-200 {
    --tw-bg-opacity: 1;
    background-color: rgb(229 231 235/var(--tw-bg-opacity))
}

.bg-gray-50 {
    --tw-bg-opacity: 1;
    background-color: rgb(249 250 251/var(--tw-bg-opacity))
}

.bg-green-100 {
    --tw-bg-opacity: 1;
    background-color: rgb(220 252 231/var(--tw-bg-opacity))
}

.bg-rose-600 {
    --tw-bg-opacity: 1;
    background-color: rgb(225 29 72/var(--tw-bg-opacity))
}

.bg-white {
    --tw-bg-opacity: 1;
    background-color: rgb(255 255 255/var(--tw-bg-opacity))
}

.bg-yellow-50 {
    --tw-bg-opacity: 1;
    background-color: rgb(254 252 232/var(--tw-bg-opacity))
}

.bg-\[url\(\'\/images\/ministry\/servo\.webp\'\)\]
.bg-cover{background-size:cover}
.bg-fixed{background-attachment:fixed}
.bg-scroll{background-attachment:scroll}
.bg-center{background-position:50%}
.bg-top{background-position:top}
.bg-no-repeat{background-repeat:no-repeat}
.object-contain{object-fit:contain}
.p-1{padding:.25rem}
.p-1\.5{padding:.375rem}
.p-2{padding:.5rem}
.p-2\.5{padding:.625rem}
.p-4{padding:1rem}
.p-6{padding:1.5rem}
.px-1{padding-left:.25rem;padding-right:.25rem}.px-11{padding-left:2.75rem;padding-right:2.75rem}.px-12{padding-left:3rem;padding-right:3rem}.px-2{padding-left:.5rem;padding-right:.5rem}.px-20{padding-left:5rem;padding-right:5rem}.px-3{padding-left:.75rem;padding-right:.75rem}.px-4{padding-left:1rem;padding-right:1rem}.px-5{padding-left:1.25rem;padding-right:1.25rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.px-8{padding-left:2rem;padding-right:2rem}.py-1{padding-top:.25rem;padding-bottom:.25rem}.py-12{padding-top:3rem;padding-bottom:3rem}.py-16{padding-top:4rem;padding-bottom:4rem}.py-2{padding-top:.5rem;padding-bottom:.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.py-6{padding-top:1.5rem;padding-bottom:1.5rem}.py-8{padding-top:2rem;padding-bottom:2rem}.pb-16{padding-bottom:4rem}.pb-4{padding-bottom:1rem}.pl-0{padding-left:0}.pl-3{padding-left:.75rem}.pl-4{padding-left:1rem}.pr-10{padding-right:2.5rem}.pr-2{padding-right:.5rem}.pr-4{padding-right:1rem}.pt-16{padding-top:4rem}.pt-2{padding-top:.5rem}.pt-3{padding-top:.75rem}.text-left{text-align:left}.text-center{text-align:center}.text-right{text-align:right}.text-2xl{font-size:1.5rem;line-height:2rem}.text-3xl{font-size:1.875rem;line-height:2.25rem}.text-4xl{font-size:2.25rem;line-height:2.5rem}.text-base{font-size:1rem;line-height:1.5rem}.text-lg{font-size:1.125rem;line-height:1.75rem}.text-sm{font-size:.875rem;line-height:1.25rem}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-xs{font-size:.75rem;line-height:1rem}.font-bold{font-weight:700}.font-extrabold{font-weight:800}.font-medium{font-weight:500}.font-semibold{font-weight:600}.uppercase{text-transform:uppercase}.italic{font-style:italic}.leading-5{line-height:1.25rem}.leading-6{line-height:1.5rem}.leading-7{line-height:1.75rem}.leading-8{line-height:2rem}.leading-loose{line-height:2}.leading-none{line-height:1}.tracking-tight{letter-spacing:-.025em}.text-\[\#B30000\]{--tw-text-opacity:1;color:rgb(179 0 0/var(--tw-text-opacity))}.text-brand{--tw-text-opacity:1;color:rgb(0 64 140/var(--tw-text-opacity))}.text-dark{--tw-text-opacity:1;color:rgb(56 56 56/var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128/var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity:1;color:rgb(55 65 81/var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39/var(--tw-text-opacity))}.text-light{--tw-text-opacity:1;color:rgb(234 234 234/var(--tw-text-opacity))}.text-link{--tw-text-opacity:1;color:rgb(159 157 157/var(--tw-text-opacity))}.text-red-500{--tw-text-opacity:1;color:rgb(239 68 68/var(--tw-text-opacity))}.text-white{--tw-text-opacity:1;color:rgb(255 255 255/var(--tw-text-opacity))}.text-yellow-400{--tw-text-opacity:1;color:rgb(250 204 21/var(--tw-text-opacity))}.text-yellow-800{--tw-text-opacity:1;color:rgb(133 77 14/var(--tw-text-opacity))}.opacity-0{opacity:0}.opacity-100{opacity:1}.opacity-25{opacity:.25}.opacity-75{opacity:.75}.shadow-lg{--tw-shadow:0 10px 15px -3px rgba(0,0,0,.1),0 4px 6px -4px rgba(0,0,0,.1);--tw-shadow-colored:0 10px 15px -3px var(--tw-shadow-color),0 4px 6px -4px var(--tw-shadow-color)}.shadow-lg,.shadow-sm{box-shadow:var(--tw-ring-offset-shadow,0 0 #0000),var(--tw-ring-shadow,0 0 #0000),var(--tw-shadow)}.shadow-sm{--tw-shadow:0 1px 2px 0 rgba(0,0,0,.05);--tw-shadow-colored:0 1px 2px 0 var(--tw-shadow-color)}.ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow,0 0 #0000)}.ring-black{--tw-ring-opacity:1;--tw-ring-color:rgb(0 0 0/var(--tw-ring-opacity))}.ring-opacity-5{--tw-ring-opacity:0.05}.filter{-webkit-filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow);filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.transition{transition-property:color,background-color,border-color,text-decoration-color,fill,stroke,opacity,box-shadow,-webkit-transform,-webkit-filter,-webkit-backdrop-filter;transition-property:color,background-color,border-color,text-decoration-color,fill,stroke,opacity,box-shadow,transform,filter,backdrop-filter;transition-property:color,background-color,border-color,text-decoration-color,fill,stroke,opacity,box-shadow,transform,filter,backdrop-filter,-webkit-transform,-webkit-filter,-webkit-backdrop-filter;transition-timing-function:cubic-bezier(.4,0,.2,1);transition-duration:.15s}.duration-100{transition-duration:.1s}.duration-75{transition-duration:75ms}.ease-in{transition-timing-function:cubic-bezier(.4,0,1,1)}.ease-out{transition-timing-function:cubic-bezier(0,0,.2,1)}@font-face{font-family:Gotham;src:url(/fonts/Gotham-Thin.otf);font-weight:100}@font-face{font-family:Gotham;src:url(/fonts/Gotham-Light.otf);font-weight:200}@font-face{font-family:Gotham;src:url(/fonts/Gotham-Book.otf);font-weight:400}@font-face{font-family:Gotham;src:url(/fonts/Gotham-Medium.otf);font-weight:600}@font-face{font-family:Gotham;src:url(/fonts/Gotham-Bold.otf);font-weight:700}.diclaimer-wrapper>b{margin-bottom:1rem;display:inline-block}.diclaimer-wrapper ol{list-style-type:decimal;padding-left:.75rem}.diclaimer-wrapper ol li{padding-bottom:.25rem;line-height:1.6em}.marquee-container{overflow:hidden}@media (min-width:640px){
    .tablet\:aspect-h-9{--tw-aspect-h:9}.tablet\:aspect-w-16{position:relative;padding-bottom:calc(var(--tw-aspect-h) / var(--tw-aspect-w) * 100%);--tw-aspect-w:16}.tablet\:aspect-w-16>*{position:absolute;height:100%;width:100%;top:0;right:0;bottom:0;left:0}}.odd\:bg-white:nth-child(odd){--tw-bg-opacity:1;background-color:rgb(255 255 255/var(--tw-bg-opacity))}.even\:bg-gray-50:nth-child(2n){--tw-bg-opacity:1;background-color:rgb(249 250 251/var(--tw-bg-opacity))}.hover\:border-none:hover{border-style:none}.hover\:bg-brand:hover{--tw-bg-opacity:1;background-color:rgb(0 64 140/var(--tw-bg-opacity))}.hover\:bg-gray-100:hover{--tw-bg-opacity:1;background-color:rgb(243 244 246/var(--tw-bg-opacity))}.hover\:bg-gray-200:hover{--tw-bg-opacity:1;background-color:rgb(229 231 235/var(--tw-bg-opacity))}.hover\:bg-gray-50:hover{--tw-bg-opacity:1;background-color:rgb(249 250 251/var(--tw-bg-opacity))}.hover\:bg-rose-700:hover{--tw-bg-opacity:1;background-color:rgb(190 18 60/var(--tw-bg-opacity))}.hover\:text-brand:hover{--tw-text-opacity:1;color:rgb(0 64 140/var(--tw-text-opacity))}.hover\:text-light:hover{--tw-text-opacity:1;color:rgb(234 234 234/var(--tw-text-opacity))}.hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255/var(--tw-text-opacity))}.focus\:outline-none:focus{outline:2px solid transparent;outline-offset:2px}.focus\:ring-2:focus{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow,0 0 #0000)}.focus\:ring-brand:focus{--tw-ring-opacity:1;--tw-ring-color:rgb(0 64 140/var(--tw-ring-opacity))}.focus\:ring-indigo-500:focus{--tw-ring-opacity:1;--tw-ring-color:rgb(99 102 241/var(--tw-ring-opacity))}.focus\:ring-rose-500:focus{--tw-ring-opacity:1;--tw-ring-color:rgb(244 63 94/var(--tw-ring-opacity))}.focus\:ring-offset-2:focus{--tw-ring-offset-width:2px}.focus-visible\:ring-2:focus-visible{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow,0 0 #0000)}.focus-visible\:ring-white:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 255 255/var(--tw-ring-opacity))}.focus-visible\:ring-opacity-75:focus-visible{--tw-ring-opacity:0.75}.disabled\:opacity-50:disabled{opacity:.5}
    @media (min-width:640px){
        .sm\:mt-4{margin-top:1rem}.sm\:flex{display:flex}.sm\:max-w-sm{max-width:24rem}.sm\:flex-1{flex:1 1 0%}.sm\:grid-cols-none{grid-template-columns:none}.sm\:text-2xl{font-size:1.5rem;line-height:2rem}.sm\:text-base{font-size:1rem;line-height:1.5rem}.sm\:text-sm{font-size:.875rem;line-height:1.25rem}.sm\:text-xl{font-size:1.25rem;line-height:1.75rem}.sm\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow,0 0 #0000)}.sm\:ring-gray-900\/10{--tw-ring-color:rgba(17,24,39,.1)}.tablet\:m-16{margin:4rem}.tablet\:m-3{margin:.75rem}.tablet\:mx-0{margin-left:0;margin-right:0}.tablet\:mx-12{margin-left:3rem;margin-right:3rem}.tablet\:mx-5{margin-left:1.25rem;margin-right:1.25rem}.tablet\:mx-8{margin-left:2rem;margin-right:2rem}.tablet\:my-16{margin-top:4rem;margin-bottom:4rem}.tablet\:mb-12{margin-bottom:3rem}.tablet\:mb-2{margin-bottom:.5rem}.tablet\:ml-16{margin-left:4rem}.tablet\:ml-5{margin-left:1.25rem}.tablet\:ml-8{margin-left:2rem}.tablet\:mt-0{margin-top:0}.tablet\:mt-10{margin-top:2.5rem}.tablet\:mt-12{margin-top:3rem}.tablet\:mt-24{margin-top:6rem}.tablet\:mt-5{margin-top:1.25rem}.tablet\:mt-8{margin-top:2rem}.tablet\:block{display:block}.tablet\:inline-block{display:inline-block}.tablet\:flex{display:flex}.tablet\:grid{display:grid}.tablet\:hidden{display:none}.tablet\:h-12{height:3rem}.tablet\:h-3\/4{height:75%}.tablet\:w-1\/2{width:50%}.tablet\:w-1\/3{width:33.333333%}.tablet\:w-2\/5{width:40%}.tablet\:w-5\/12{width:41.666667%}.tablet\:w-80{width:20rem}.tablet\:w-\[48\%\]{width:48%}.tablet\:w-auto{width:auto}.tablet\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}.tablet\:grid-cols-3{grid-template-columns:repeat(3,minmax(0,1fr))}.tablet\:flex-row{flex-direction:row}.tablet\:flex-nowrap{flex-wrap:nowrap}.tablet\:items-center{align-items:center}.tablet\:justify-between{justify-content:space-between}.tablet\:gap-x-6{-webkit-column-gap:1.5rem;column-gap:1.5rem}.tablet\:gap-y-12{row-gap:3rem}.tablet\:space-x-4>:not([hidden])~:not([hidden]){--tw-space-x-reverse:0;margin-right:calc(1rem * var(--tw-space-x-reverse));margin-left:calc(1rem * calc(1 - var(--tw-space-x-reverse)))}.tablet\:space-x-8>:not([hidden])~:not([hidden]){--tw-space-x-reverse:0;margin-right:calc(2rem * var(--tw-space-x-reverse));margin-left:calc(2rem * calc(1 - var(--tw-space-x-reverse)))}.tablet\:space-y-0>:not([hidden])~:not([hidden]){--tw-space-y-reverse:0;margin-top:calc(0px * calc(1 - var(--tw-space-y-reverse)));margin-bottom:calc(0px * var(--tw-space-y-reverse))}.tablet\:space-y-6>:not([hidden])~:not([hidden]){--tw-space-y-reverse:0;margin-top:calc(1.5rem * calc(1 - var(--tw-space-y-reverse)));margin-bottom:calc(1.5rem * var(--tw-space-y-reverse))}.tablet\:bg-brand{--tw-bg-opacity:1;background-color:rgb(0 64 140/var(--tw-bg-opacity))}.tablet\:px-16{padding-left:4rem;padding-right:4rem}.tablet\:px-24{padding-left:6rem;padding-right:6rem}.tablet\:px-32{padding-left:8rem;padding-right:8rem}.tablet\:px-4{padding-left:1rem;padding-right:1rem}.tablet\:px-6{padding-left:1.5rem;padding-right:1.5rem}.tablet\:py-16{padding-top:4rem;padding-bottom:4rem}.tablet\:py-2{padding-top:.5rem;padding-bottom:.5rem}.tablet\:py-20{padding-top:5rem;padding-bottom:5rem}.tablet\:py-24{padding-top:6rem;padding-bottom:6rem}.tablet\:py-8{padding-top:2rem;padding-bottom:2rem}.tablet\:pb-24{padding-bottom:6rem}.tablet\:pt-24{padding-top:6rem}.tablet\:text-left{text-align:left}.tablet\:text-3xl{font-size:1.875rem;line-height:2.25rem}.tablet\:text-4xl{font-size:2.25rem;line-height:2.5rem}.tablet\:text-base{font-size:1rem;line-height:1.5rem}.tablet\:text-sm{font-size:.875rem;line-height:1.25rem}}
@media (min-width:1280px){
    .desktop\:order-1{order:1}.desktop\:order-2{order:2}.desktop\:col-span-1{grid-column:span 1/span 1}.desktop\:col-span-3{grid-column:span 3/span 3}.desktop\:col-span-6{grid-column:span 6/span 6}.desktop\:mx-10{margin-left:2.5rem;margin-right:2.5rem}.desktop\:mx-24{margin-left:6rem;margin-right:6rem}.desktop\:mx-32{margin-left:8rem;margin-right:8rem}.desktop\:mb-0{margin-bottom:0}.desktop\:ml-24{margin-left:6rem}.desktop\:mr-8{margin-right:2rem}.desktop\:mt-0{margin-top:0}.desktop\:mt-10{margin-top:2.5rem}.desktop\:mt-16{margin-top:4rem}.desktop\:mt-8{margin-top:2rem}.desktop\:block{display:block}.desktop\:inline-block{display:inline-block}.desktop\:flex{display:flex}.desktop\:grid{display:grid}.desktop\:hidden{display:none}.desktop\:h-10{height:2.5rem}.desktop\:h-12{height:3rem}.desktop\:h-16{height:4rem}.desktop\:h-80{height:20rem}.desktop\:w-1\/2{width:50%}.desktop\:w-1\/3{width:33.333333%}.desktop\:w-1\/6{width:16.666667%}.desktop\:w-12{width:3rem}.desktop\:w-2\/3{width:66.666667%}.desktop\:w-32{width:8rem}.desktop\:w-\[30\%\]{width:30%}.desktop\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}.desktop\:grid-cols-3{grid-template-columns:repeat(3,minmax(0,1fr))}.desktop\:grid-cols-4{grid-template-columns:repeat(4,minmax(0,1fr))}.desktop\:grid-cols-5{grid-template-columns:repeat(5,minmax(0,1fr))}.desktop\:grid-cols-6{grid-template-columns:repeat(6,minmax(0,1fr))}.desktop\:grid-cols-7{grid-template-columns:repeat(7,minmax(0,1fr))}.desktop\:flex-row{flex-direction:row}.desktop\:flex-nowrap{flex-wrap:nowrap}.desktop\:items-end{align-items:flex-end}.desktop\:items-center{align-items:center}.desktop\:justify-center{justify-content:center}.desktop\:justify-between{justify-content:space-between}.desktop\:gap-16{gap:4rem}.desktop\:gap-32{gap:8rem}.desktop\:gap-8{gap:2rem}.desktop\:gap-x-8{-webkit-column-gap:2rem;column-gap:2rem}.desktop\:space-x-8>:not([hidden])~:not([hidden]){--tw-space-x-reverse:0;margin-right:calc(2rem * var(--tw-space-x-reverse));margin-left:calc(2rem * calc(1 - var(--tw-space-x-reverse)))}.desktop\:space-y-0>:not([hidden])~:not([hidden]){--tw-space-y-reverse:0;margin-top:calc(0px * calc(1 - var(--tw-space-y-reverse)));margin-bottom:calc(0px * var(--tw-space-y-reverse))}.desktop\:space-y-16>:not([hidden])~:not([hidden]){--tw-space-y-reverse:0;margin-top:calc(4rem * calc(1 - var(--tw-space-y-reverse)));margin-bottom:calc(4rem * var(--tw-space-y-reverse))}.desktop\:space-y-8>:not([hidden])~:not([hidden]){--tw-space-y-reverse:0;margin-top:calc(2rem * calc(1 - var(--tw-space-y-reverse)));margin-bottom:calc(2rem * var(--tw-space-y-reverse))}.desktop\:rounded-tr-\[180px\]{border-top-right-radius:180px}.desktop\:p-32{padding:8rem}.desktop\:px-32{padding-left:8rem;padding-right:8rem}.desktop\:px-8{padding-left:2rem;padding-right:2rem}.desktop\:py-24{padding-top:6rem;padding-bottom:6rem}.desktop\:py-32{padding-top:8rem;padding-bottom:8rem}.desktop\:py-36{padding-top:9rem;padding-bottom:9rem}.desktop\:py-4{padding-top:1rem;padding-bottom:1rem}.desktop\:pb-32{padding-bottom:8rem}.desktop\:pr-32{padding-right:8rem}.desktop\:pt-32{padding-top:8rem}.desktop\:text-left{text-align:left}.desktop\:text-2xl{font-size:1.5rem;line-height:2rem}.desktop\:text-3xl{font-size:1.875rem;line-height:2.25rem}.desktop\:text-4xl{font-size:2.25rem;line-height:2.5rem}.desktop\:text-5xl{font-size:3rem;line-height:1}.desktop\:text-6xl{font-size:3.75rem;line-height:1}.desktop\:text-7xl{font-size:4.5rem;line-height:1}.desktop\:text-8xl{font-size:6rem;line-height:1}.desktop\:text-base{font-size:1rem;line-height:1.5rem}.desktop\:text-sm{font-size:.875rem;line-height:1.25rem}.desktop\:text-xl{font-size:1.25rem;line-height:1.75rem}.desktop\:leading-10{line-height:2.5rem}}
    .form-error{--tw-text-opacity:1;color:rgb(239 68 68/var(--tw-text-opacity))}.form-error input,.form-error select,.form-error textarea{--tw-border-opacity:1;border-color:rgb(239 68 68/var(--tw-border-opacity))}.form-error input::-webkit-input-placeholder,.form-error select::-webkit-input-placeholder,.form-error textarea::-webkit-input-placeholder{--tw-placeholder-opacity:1;color:rgb(239 68 68/var(--tw-placeholder-opacity))}.form-error input::placeholder,.form-error select::placeholder,.form-error textarea::placeholder{--tw-placeholder-opacity:1;color:rgb(239 68 68/var(--tw-placeholder-opacity))}.form-error .help-block{font-size:.875rem;line-height:1.25rem}.form-group{margin-bottom:1rem}button.swal2-confirm.swal2-styled,button.swal2-confirm.swal2-styled:focus{--tw-bg-opacity:1;background-color:rgb(0 64 140/var(--tw-bg-opacity))}
</style>

<div id="schedule-content" style="display: none;">
        <section>
            <div style="background-color: #023047;" class="bg-brand">
                <h1 class="py-4 text-center text-xl font-extrabold text-white tablet:py-8 tablet:text-3xl desktop:text-6xl">
                    GBI NLC Channel Schedule
                </h1>
            </div>
        </section>
    <div class="container-main">
        <div class="container-grid">
        </div>
    </div>
    <script>
    document.addEventListener("DOMContentLoaded", function() {
    const container = document.querySelector('.container-grid');
    const ref = document.querySelector('.container-main');

    const timetable = {
        "Mon": [],
        "Tue": [
            {"time": "05:00-05:00", "course" : "Doa Pagi"},
        ],
        "Wed": [
            {"time": "05:00-05:00", "course" : "Doa Pagi"},
        ],
        "Thu": [
            {"time": "05:00-05:00", "course" : "Doa Pagi"},
            {"time": "19:30", "course": "Life Group (BSD)"},
        ],
        "Fri": [
            {"time": "05:00-05:00", "course" : "Doa Pagi"},
            {"time": "19:30", "course": "Life Group (Gading Serpong)"},
        ],
        "Sat": [
            {"time": "18:00", "course": "New Life Youth"},
        ],
        "Sun": [
            {"time": "08:00-10:00", "course": "Ibadah Raya 1"},
            {"time": "10:00-12:00", "course": "Ibadah Raya 2 & New Life Kids"},
            {"time": "12:30-13:30", "course": "New Life Teens"},
            {"time": "17:00-19:00", "course": "Ibadah Raya 3 & New Life Kids"},
        ]
    };

    const colours = [
        "#8bbba2",
        "#b488df",
        "#f77650",
        "#f2b699",
        "#b15a59",
        "#d0b7e8",
        "#f5ceb4",
        "#8b5a59",
    ];

    const divs = [
        {"className":"", "data":"", "row": 1, "col": 1, "row1":2, "col1":2},
        {"className":"days", "data":"Mon", "row": 1, "col": 2, "row1":2, "col1":3},
        {"className":"days", "data":"Tue", "row": 1, "col": 3, "row1":2, "col1":4},
        {"className":"days", "data":"Wed", "row": 1, "col": 4, "row1":2, "col1":5},
        {"className":"days", "data":"Thu", "row": 1, "col": 5, "row1":2, "col1":6},
        {"className":"days", "data":"Fri", "row": 1, "col": 6, "row1":2, "col1":7},
        {"className":"days", "data":"Sat", "row": 1, "col": 7, "row1":2, "col1":8},
        {"className":"days", "data":"Sun", "row": 1, "col": 8, "row1":2, "col1":9}
    ];

    var coursesToColour = {};
    var edges = [];
    var courses = [];


    for (const key in timetable) {
        timetable[key].map((item) => {
            edges.push(item.time.split("-")[0]);
            edges.push(item.time.split("-")[1]);
            courses.push(item.course);
        });
    }

    edges = [...new Set(edges)];
    edges = edges.sort();
    courses = [...new Set(courses)];

    courses.forEach((course,i) => {
        coursesToColour[course] = colours[i];
    });

    edges.forEach((edge,i) => {
        divs.push({"className":"time" ,"data":edge, "row": i+2, "col": 1, "row1":i+3, "col1":2});
    });

    var i = 2;
    for (const key in timetable) {
        timetable[key].map((item) => {
            let temprow1 = edges.indexOf(item.time.split("-")[0]);
            let temprow2 = edges.indexOf(item.time.split("-")[1]);
            divs.push({"className":"grid-item" ,"data":item.course, "row": temprow1+2, "col": i, "row1":temprow2+2, "col1": i+1, "backgroundColor": coursesToColour[item.course]});
        });
        i++;
    }

    divs.forEach((div) => {
        const divElement = document.createElement('div');
        divElement.className = div.className;
        divElement.style.gridArea = `${div.row}/${div.col}/${div.row1}/${div.col1}`;
        divElement.style.backgroundColor = div.backgroundColor;
        divElement.textContent = div.data;
        container.appendChild(divElement);
    });
    document.documentElement.style.setProperty('--lineWidth', ref.offsetWidth-60 + 'px');

    ref.style.gridTemplateRows = `25px repeat(${edges.length},1fr)`;
});
</script>
</div>
<div class="h-3 bg-brand" style="background-color: #023047;"></div>



