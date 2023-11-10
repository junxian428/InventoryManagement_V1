<html>
    <head>
   <title>Inventory Management System</title>
   <style>
*,
*::before,
*::after {
  box-sizing: border-box;
}

a,
a:hover,
a::before,
a::after,
a:hover::before,
a:hover::after {
  transition: all 0.4s ease-in-out;
}

::-webkit-scrollbar {
  width: 20px;
}

::-webkit-scrollbar-track {
  background: MediumSpringGreen;
}

::-webkit-scrollbar-thumb {
  background: MediumSeaGreen;
}

::-webkit-scrollbar-thumb:hover {
  background: SeaGreen;
}

body,
html {
  font-family: "Poppins", sans-serif;
  -webkit-text-size-adjust: 100%;
  -webkit-tap-highlight-color: transparent;
  -webkit-font-smoothing: antialiased;
  text-rendering: optimizeLegibility;
  font-size: 12pt;
  font-weight: 400;
  color: black;
}

body {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  height: 100vh;
  overflow: hidden;
  background: MediumSpringGreen;
  margin: 0;
  padding: 0;
}

.dashboard-river {
  position: relative;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  width: 100%;
  height: 100%;
}

.dashboard-container {
  position: relative;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  width: 95%;
  height: 90%;
  background: white;
  box-shadow: 0 20px 40px 0 SeaGreen, inset 0px -10px 17px 1px MediumSeaGreen;
  overflow: hidden;
  border-radius: 25px;
  z-index: 998;
}

.dashboard {
  position: relative;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: flex-start;
  width: 100%;
  height: 100%;
  overflow-y: auto;
  overflow-x: hidden;
}

.ui-row-1 {
  position: relative;
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: space-between;
  width: 100%;
  height: auto;
  padding: 35px 30px 25px 30px;
}

.logo-comp {
  position: relative;
  left: 12px;
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: center;
  width: auto;
  height: auto;
  transition: all 0.4s ease-in-out;
}

.logo-comp:hover {
  cursor: pointer;
  transition: all 0.4s ease-in-out;
}

.logo-comp > div {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  width: 40px;
  height: 40px;
  border-radius: 100px;
  background: MediumSpringGreen;
  box-shadow: 0 5px 15px 0 SeaGreen, inset 0px -6px 12px 0px SeaGreen;
  transition: all 0.4s ease-in-out;
}

.logo-comp > div > svg {
  fill: white;
  width: 70%;
  height: 70%;
  filter: drop-shadow(1px 1px 0px SeaGreen);
  transition: all 0.4s ease-in-out;
}

.logo-comp p {
  letter-spacing: 3px;
  font-size: 16pt;
  margin: 0;
  margin-left: 12px;
  padding: 0;
  color: SeaGreen;
  transition: all 0.4s ease-in-out;
}

.logo-comp:hover > p {
  color: black;
  transition: all 0.4s ease-in-out;
}

.logo-comp:hover > div > svg {
  fill: black;
  filter: unset;
  transition: all 0.4s ease-in-out;
}

.search {
  position: relative;
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: center;
  width: 50%;
  height: auto;
}

.search input {
  width: 100%;
  height: 50px;
  border-radius: 12px;
  box-shadow: 0 10px 20px 0 #3cb37177, inset 0px -4px 8px 0 SeaGreen;
  border: none !important;
  padding: 0px 20px 5px 20px;
}

.search > svg {
  position: absolute;
  right: 20px;
  bottom: 38%;
  width: 18px;
  height: auto;
  fill: SeaGreen;
}

.search input:focus {
  outline: 1px solid MediumSpringGreen;
}

.profile {
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: center;
  width: auto;
  height: auto;
}

.profile > svg {
  fill: dimgray;
  width: 25px;
  height: auto;
  margin-right: 20px;
}

.profile > svg:nth-child(3) {
  margin-left: 5px;
  order: 4;
  fill: dimgray;
  margin-right: unset;
}

.profile > svg:hover,
.profile-small > svg:hover {
  cursor: pointer;
  fill: MediumSpringGreen;
}

.profile > svg:active,
.profile-small > svg:active {
  transform: scale(0.92);
}

.profile > div {
  width: 50px;
  height: 50px;
  border-radius: 200px;
  background: url("https://picsum.photos/id/440/60/60");
  background-position: center;
  background-size: cover;
}

.profile-small {
  display: none;
}

.ui-row-2 {
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: space-between;
  width: 100%;
  height: auto;
  padding: 10px 30px;
}

.left-sidebar {
  position: sticky;
  top: 20px;
  display: flex;
  align-self: flex-start;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  width: auto;
  height: auto;
  background: #eee;
  padding: 15px 10px;
  border-radius: 10px;
  margin-bottom: 30px;
}

.left-sidebar > div {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  width: 45px;
  height: 45px;
  background: MediumSpringGreen;
  border-radius: 10px;
  margin-bottom: 25px;
  box-shadow: 0 7px 14px 0 #3cb37199, inset 0px -5px 7px 0px MediumSeaGreen;
}

.left-sidebar > div:last-of-type {
  margin-bottom: unset;
}

.left-sidebar > div:hover {
  cursor: pointer;
  transform: translateY(-3px);
  box-shadow: 0 10px 16px 0 #3cb371dd, inset 0px -5px 9px 0px MediumSeaGreen;
  border: 1px solid MediumSpringGreen;
}

.left-sidebar > div > svg {
  fill: SeaGreen;
  width: 25px;
  height: auto;
}

.left-sidebar > div:active {
  transform: scale(0.92);
}

.left-sidebar > div:hover > svg {
  fill: black;
}

.main-content {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: flex-start;
  width: 100%;
  height: 100%;
  margin-left: 30px;
}

.header {
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: space-between;
  width: 100%;
  height: auto;
}

.page-display {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: center;
  width: auto;
  height: auto;
}

.page-display h1 {
  position: relative;
  font-size: 30pt;
  color: black;
  font-weight: 800;
  padding: 0;
  margin: 0;
  line-height: 30pt;
}

.page-display h1::after {
  position: absolute;
  bottom: -3px;
  left: 0;
  width: 100%;
  height: 15px;
  background: SpringGreen;
  content: "";
  z-index: -1;
}

.page-display h2 {
  font-size: 16pt;
  color: dimgray;
  font-weight: 600;
  padding: 0;
  margin: 0;
}

.page-display:hover,
.page-display h1:hover,
.page-display h2:hover {
  cursor: default;
}

.clay-category {
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: center;
  width: 27%;
  height: 100%;
  background: MediumSpringGreen;
  box-shadow: 0 10px 20px 0 #3cb37177, inset 0px -7px 12px 1px MediumSeaGreen;
  border-radius: 20px;
  transition: all 0.4s ease-in-out;
}

.clay-category svg {
  fill: SeaGreen;
  width: 30px;
  height: auto;
  margin-right: 10px;
  transition: all 0.4s ease-in-out;
}

.clay-category:nth-child(2) > svg {
  width: 37px;
}

.clay-category:nth-child(3) > svg {
  width: 24px;
}

.clay-category p {
  color: dimgray;
  font-size: 15pt;
  letter-spacing: 1px;
  transition: all 0.4s ease-in-out;
}

.clay-category:hover {
  cursor: pointer;
  transform: translateX(-15px);
  background: SeaGreen !important;
  transition: all 0.4s ease-in-out;
}

.clay-category:active {
  transform: scale(0.92);
}

.clay-category:hover > svg {
  fill: MediumSpringGreen;
  transition: all 0.4s ease-in-out;
}

.clay-category:hover > p {
  color: white;
  text-decoration: 2px dotted underline MediumSpringGreen;
  transition: all 0.4s ease-in-out;
}

.large-banner {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  position: relative;
  width: 100%;
  height: 200px;
  background: url("https://picsum.photos/id/622/1920/1080");
  background-size: 100%;
  background-position: center;
  background-attachment: scroll;
  background-repeat: no-repeat;
  border-radius: 20px;
  margin-top: 30px;
  box-shadow: rgba(0, 0, 0, 0.17) 0px -23px 25px 0px inset,
    rgba(0, 0, 0, 0.15) 0px -36px 30px 0px inset,
    rgba(0, 0, 0, 0.1) 0px -79px 40px 0px inset, rgba(0, 0, 0, 0.06) 0px 2px 1px,
    rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px,
    rgba(0, 0, 0, 0.09) 0px 16px 8px;
  z-index: 1;
  transition: all 0.5s ease-in-out;
}

.large-banner:hover {
  background-size: 120%;
  cursor: pointer;
  transition: all 0.5s ease-in-out;
}

.large-banner h2 {
  color: white;
  font-size: 30pt;
  margin: 0;
  padding: 0;
  line-height: 30pt;
  margin-bottom: 10px;
  text-shadow: 1px 1px 0px SeaGreen, 2px 2px 0px SeaGreen;
}

.large-banner a {
  position: relative;
  background: white;
  font-size: 12pt;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  text-decoration: none;
  padding: 10px 20px;
  color: dimgray;
  border-radius: 12px;
  overflow: hidden;
  box-shadow: 0 10px 20px 0 #000000bb, inset 0px -5px 10px 1px SeaGreen;
}

.large-banner a::after {
  position: absolute;
  top: 110%;
  left: 0;
  width: 100%;
  height: 100%;
  content: "";
  background: MediumSpringGreen;
  border-radius: 12px;
  box-shadow: 0 10px 20px 0 #000000bb, inset 0px -5px 10px 1px SeaGreen;
  opacity: 0;
  z-index: -1;
}

.large-banner a:hover {
  transform: translateY(5px);
  color: black;
}

.large-banner a:hover::after {
  top: 0;
  opacity: 1;
}

.large-banner a:active {
  transform: scale(0.92);
}

.large-banner::before {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: linear-gradient(135deg, SpringGreen, SeaGreen);
  content: "";
  border-radius: 20px;
  mix-blend-mode: soft-light;
  z-index: -1;
  box-shadow: rgba(0, 0, 0, 0.17) 0px -23px 25px 0px inset,
    rgba(0, 0, 0, 0.15) 0px -36px 30px 0px inset,
    rgba(0, 0, 0, 0.1) 0px -79px 40px 0px inset;
  transition: all 0.5s ease-in-out;
}

.large-banner::after {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: #00ff7f;
  background-image: url("https://www.transparenttextures.com/patterns/buried.png");
  content: "";
  border-radius: 20px;
  mix-blend-mode: soft-light;
  z-index: -2;
  transition: all 0.5s ease-in-out;
}

.main-content > hr {
  width: 99%;
  height: 1px;
  margin-top: 35px;
  border: 0;
  border-top: 1px solid #ccc;
}

.main-content > hr:last-of-type {
  margin-top: 0px;
  margin-bottom: 35px;
}

.featured-clay {
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: space-between;
  flex-wrap: wrap;
  width: 100%;
  height: auto;
  margin-bottom: 35px;
  z-index: 2;
}

.featured-clay > div {
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: center;
  width: 32%;
  height: auto;
  background: PaleGreen;
  padding: 30px 20px;
  margin-top: 25px;
  border-radius: 20px;
  box-shadow: 0 10px 20px 0 #3cb37177, inset 0px -7px 12px 1px MediumSeaGreen;
  transition: all 0.4s ease-in-out;
}

.featured-clay > div:nth-child(2) {
  filter: hue-rotate(15deg);
}

.featured-clay > div:nth-child(3) {
  filter: hue-rotate(30deg);
}

.featured-clay > div:nth-child(4) {
  filter: hue-rotate(45deg);
}

.featured-clay > div:nth-child(5) {
  filter: hue-rotate(60deg);
}

.featured-clay > div:nth-child(6) {
  filter: hue-rotate(75deg);
}

.featured-clay > div > div:nth-child(1) {
  all: unset;
  width: 40%;
  height: 250px;
  background: url("https://picsum.photos/id/400/600/600");
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  border-radius: 12px;
}

.featured-clay > div:nth-child(2) > div:nth-child(1) {
  background: url("https://picsum.photos/id/402/600/600");
}

.featured-clay > div:nth-child(3) > div:nth-child(1) {
  background: url("https://picsum.photos/id/443/600/600");
}

.featured-clay > div:nth-child(4) > div:nth-child(1) {
  background: url("https://picsum.photos/id/404/600/600");
}

.featured-clay > div:nth-child(5) > div:nth-child(1) {
  background: url("https://picsum.photos/id/405/600/600");
}

.featured-clay > div:nth-child(6) > div:nth-child(1) {
  background: url("https://picsum.photos/id/408/600/600");
}

.featured-clay > div:hover {
  animation: glow 10s linear infinite;
  box-shadow: 0 17px 45px 0 #3cb371, inset 0px -7px 12px 1px MediumSeaGreen;
  cursor: pointer;
  transform: translateY(-10px);
  transition: all 0.4s ease-in-out;
}

.featured-clay > div:active {
  transform: scale(0.96);
}

.featured-clay > div:nth-child(2):hover {
  animation: glow15 8s linear infinite;
}

.featured-clay > div:nth-child(3):hover {
  animation: glow30 8s linear infinite;
}

.featured-clay > div:nth-child(4):hover {
  animation: glow45 8s linear infinite;
}

.featured-clay > div:nth-child(5):hover {
  animation: glow60 8s linear infinite;
}

.featured-clay > div:nth-child(6):hover {
  animation: glow75 8s linear infinite;
}

@keyframes glow {
  0% {
    filter: hue-rotate(0deg);
  }
  100% {
    filter: hue-rotate(360deg);
  }
}

@keyframes glow15 {
  0% {
    filter: hue-rotate(15deg);
  }
  100% {
    filter: hue-rotate(375deg);
  }
}

@keyframes glow30 {
  0% {
    filter: hue-rotate(30deg);
  }
  100% {
    filter: hue-rotate(390deg);
  }
}

@keyframes glow45 {
  0% {
    filter: hue-rotate(45deg);
  }
  100% {
    filter: hue-rotate(405deg);
  }
}

@keyframes glow60 {
  0% {
    filter: hue-rotate(60deg);
  }
  100% {
    filter: hue-rotate(420deg);
  }
}

@keyframes glow75 {
  0% {
    filter: hue-rotate(75deg);
  }
  100% {
    filter: hue-rotate(435deg);
  }
}

.featured-clay > div > div:nth-child(2) {
  all: unset;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: center;
  width: 50%;
  margin-left: 20px;
  padding-left: 20px;
  border-left: 1px solid SeaGreen;
}

.featured-clay > div > div:nth-child(2) > h3,
.featured-clay > div > div:nth-child(2) > p,
.featured-clay > div > div:nth-child(2) > a {
  margin: 0;
  padding: 0;
  line-height: 12pt;
}

.featured-clay > div > div:nth-child(2) > h3 {
  font-size: 18pt;
  color: SeaGreen;
  line-height: 26pt;
  position: relative;
  width: auto;
  height: auto;
}

.featured-clay > div > div:nth-child(2) > h3::after {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 60px;
  height: 15px;
  background: white;
  content: "";
  border-bottom: 2px dotted SpringGreen;
  z-index: -1;
}

.featured-clay > div > div:nth-child(2) > p {
  font-size: 12pt;
  color: black;
  line-height: 16pt;
  padding: 10px 0px;
}

.featured-clay > div > div:nth-child(2) > a {
  background: SeaGreen;
  color: white;
  margin-top: 10px;
  width: 100px;
  height: 30px;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  text-decoration: none;
  border-radius: 7px;
}

.featured-clay > div > div:nth-child(2) > a:hover {
  width: 120px;
  height: 40px;
}

.featured-clay > div > div:nth-child(2) > a:active {
  border: 1px solid DarkSeaGreen;
}

.featured-users {
  position: relative;
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: space-between;
  width: 100%;
  height: auto;
  margin-bottom: 35px;
}

.featured-users > h2 {
  color: dimgray;
  font-weight: 600;
  font-size: 24pt;
  line-height: 20pt;
}

.featured-users > h2 > span {
  font-weight: 900;
  font-size: 20pt;
}

.featured-users > div {
  position: relative;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: center;
  width: 30%;
  height: auto;
  margin: 0px 20px;
  border-left: 3px solid MediumSpringGreen;
  padding-left: 30px;
  left: 10px;
}

.featured-users::after {
  position: absolute;
  bottom: 0;
  right: 0;
  width: 300px;
  height: 300px;
  border-radius: 300px;
  background: MediumSpringGreen;
  content: "";
  z-index: -1;
}

.featured-users > div > div:nth-child(1) {
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: flex-start;
  width: 100%;
  height: auto;
}

.featured-users > div > div:nth-child(1) > div:nth-child(1) {
  width: 70px;
  height: 70px;
  border-radius: 10px;
  background: url("https://picsum.photos/id/715/80/80");
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  border: 1px solid MediumSpringGreen;
}

.featured-users > div:nth-child(2) > div:nth-child(1) > div:nth-child(1) {
  background: url("https://picsum.photos/id/910/80/80");
}

.featured-users > div:nth-child(3) > div:nth-child(1) > div:nth-child(1) {
  background: url("https://picsum.photos/id/441/80/80");
}

.featured-users > div > div:nth-child(1) > div:nth-child(2) {
  width: auto;
  height: auto;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: center;
  margin-left: 15px;
}

.featured-users > div > div:nth-child(1) > div:nth-child(2) > h3 {
  font-size: 16pt;
  margin: 0;
  padding: 0;
  line-height: 30pt;
  white-space: nowrap;
  transition: all 0.4s ease-in-out;
}

.featured-users > div > div:nth-child(1) > div:nth-child(2) > h3:hover {
  transform: translateX(8px);
  color: SeaGreen;
  cursor: pointer;
  transition: all 0.4s ease-in-out;
}

.featured-users > div > div:nth-child(1) > div:nth-child(2) > div {
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: flex-start;
  width: 100%;
  height: auto;
}

.featured-users > div > div:nth-child(1) > div:nth-child(2) > div > svg {
  width: 20px;
  height: auto;
  margin-right: 10px;
  fill: dimgray;
}

.featured-users > div > div:nth-child(1) > div:nth-child(2) > div > svg:hover {
  transform: translateY(-3px);
  cursor: pointer;
}

.featured-users > div > div:nth-child(1) > div:nth-child(2) > div > svg:active {
  transform: scale(0.92);
}

.featured-users > div > div:nth-child(2) {
  position: relative;
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: flex-start;
  width: 100%;
  height: auto;
  margin-top: 15px;
}

.featured-users > div > div:nth-child(2)::after {
  position: absolute;
  right: 30%;
  background: SeaGreen;
  color: white;
  content: "CATEGORIES";
  width: 100px;
  height: 30px;
  border-radius: 10px;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  font-size: 10pt;
}

.clay-category:nth-child(2) {
  background: SpringGreen;
  order: 1;
}

.clay-category:nth-child(3) {
  background: PaleGreen;
  order: 3;
}

.featured-users > div > div:nth-child(2) > div {
  background: dimgray;
  width: 50px;
  height: 50px;
  border-radius: 10px;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  box-shadow: 0 6px 15px 0 #3cb371aa, inset 0px -7px 12px 1px black;
  margin-right: 10px;
}

.featured-users > div > div:nth-child(2) > div:hover {
  cursor: pointer;
  transform: translateY(-3px);
  box-shadow: 0 10px 16px 0 #3cb371dd, inset 0px -5px 9px 0px MediumSeaGreen;
  border: 1px solid MediumSpringGreen;
}

.featured-users > div > div:nth-child(2) > div:active {
  transform: scale(0.92);
}

.featured-users > div > div:nth-child(2) > div > svg {
  fill: white;
  width: 70%;
  height: auto;
}

.featured-users > div > div:nth-child(2) > div:nth-child(2) > svg {
  width: 40%;
  height: auto;
}

.featured-users > div > div:nth-child(2) > div:nth-child(3) > svg {
  width: 55%;
  height: auto;
}

@media (max-width: 1870px) {
  .featured-users > div > div:nth-child(2)::after {
    right: 20%;
  }
}

@media (max-width: 1720px) {
  .featured-users > div > div:nth-child(2)::after {
    right: 10%;
  }
  .featured-clay > div {
    padding: 40px 20px;
  }
  .featured-clay > div > div:nth-child(2) > h3 {
    line-height: 20pt;
  }
}

@media (max-width: 1590px) {
  .featured-users > div > div:nth-child(2)::after {
    right: 0;
  }
}

@media (max-width: 1500px) {
  .clay-category {
    width: 24%;
  }
  .featured-users > div:nth-child(3) > div:nth-child(2)::after,
  .featured-users > div:nth-child(4) > div:nth-child(2)::after {
    display: none;
  }
}

@media (max-width: 1363px) {
  .ui-row-2 {
    flex-direction: column;
  }
  .main-content {
    margin-left: 0 !important;
  }
  .left-sidebar {
    width: 100%;
    z-index: 999;
    flex-direction: row;
    border-radius: 0px 0px 20px 20px;
    justify-content: space-evenly;
    top: 0px;
    padding: 20px 0px;
    box-shadow: 0 10px 20px 0 #2e8b57aa, inset 0px -7px 9px 0px SeaGreen;
    border: 1px solid MediumSpringGreen;
  }
  .left-sidebar > div,
  .left-sidebar > div:last-of-type {
    margin-bottom: 8px;
  }
}

@media (max-width: 1250px) {
  .featured-users {
    flex-wrap: wrap;
  }
  .featured-users::after {
    display: none;
  }
  .featured-users > div::after {
    position: absolute;
    bottom: 0;
    right: 0;
    width: 300px;
    height: 300px;
    border-radius: 300px;
    background: MediumSpringGreen;
    content: "";
    z-index: -1;
  }
  .featured-users h2 {
    width: 100%;
    text-align: center;
    margin-top: 0;
    margin-bottom: 35px;
    letter-spacing: 2px;
    font-weight: 400;
  }
  .featured-users > h2 > br {
    display: none;
  }
  .featured-users > h2 > span {
    all: unset;
    font-weight: 600;
    margin-left: 8px;
  }
  .featured-users > div {
    margin: unset;
  }
}

@media (max-width: 1200px) {
  .featured-users > div {
    width: 33%;
    padding-left: 15px;
  }
  .featured-users > div > div:nth-child(2)::after {
    right: 3%;
  }
}

@media (max-width: 1100px) {
  .clay-category p {
    font-size: 12pt;
  }
  .featured-clay > div {
    width: 49%;
  }
  .featured-users > div {
    width: 90%;
    margin-bottom: 40px;
  }
  .featured-users > div:nth-child(4) {
    margin-bottom: unset;
  }
  .featured-users > div > div:nth-child(2)::after {
    left: 25%;
  }
  .featured-users > div:nth-child(3) > div:nth-child(2)::after,
  .featured-users > div:nth-child(4) > div:nth-child(2)::after {
    display: flex;
  }
  .featured-users {
    overflow: hidden;
    padding-bottom: 30px;
    border-radius: 0 0 20px 20px;
  }
  .featured-users > div::after {
    display: none;
  }
  .featured-users::after {
    display: initial;
    bottom: -40%;
    right: -20%;
    width: 750px;
    height: 750px;
    border-radius: 750px;
  }
}

@media (max-width: 992px) {
  ::-webkit-scrollbar {
    display: none;
  }
  .dashboard-container {
    height: 95%;
  }
  .ui-row-2 {
    padding-top: 0px;
  }
  .header {
    flex-direction: column;
    align-items: center;
    justify-content: center;
  }
  .page-display {
    align-items: center;
    justify-content: center;
    margin-top: 5px;
    margin-bottom: 30px;
  }
  .page-display h1,
  .page-display h2 {
    text-align: center;
  }
  .clay-category {
    width: 100%;
    margin-bottom: 30px;
  }
  .clay-category:nth-child(3) {
    margin-bottom: 10px;
  }
  .clay-category p {
    font-size: 16pt;
  }
  .profile {
    display: none;
  }
  .profile-small {
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    width: auto;
    height: auto;
  }
  .profile-small svg {
    width: 30px;
    margin-right: 30px;
    height: auto;
    fill: dimgray;
  }
  .search {
    display: none;
  }
}

@media (max-width: 970px) {
  .featured-users > div > div:nth-child(2)::after {
    left: 32%;
  }
}

@media (max-width: 800px) {
  .featured-users > div > div:nth-child(2)::after {
    left: 40%;
  }
}

@media (max-width: 760px) {
  .featured-clay {
    justify-content: center;
  }
  .featured-clay > div {
    width: 90%;
  }
}

@media (max-width: 700px) {
  .large-banner h2 {
    text-align: center;
    padding: 0 10px;
    font-size: 24pt;
  }
  .large-banner {
    background-size: cover;
  }
  .large-banner:hover {
    background-size: cover;
  }
}

@media (max-width: 660px) {
  .featured-users > div > div:nth-child(2)::after {
    left: unset;
    right: 5%;
  }
}

@media (max-width: 500px) {
  .featured-users > h2 > br {
    display: initial;
  }
}

@media (max-width: 475px) {
  .left-sidebar > div {
    width: 35px;
    height: 35px;
  }
  .left-sidebar > div > svg {
    width: 20px;
  }
  .ui-row-1 {
    padding: 30px 20px 20px 20px;
  }
  .profile-small svg {
    margin-right: 15px;
  }
}

@media (max-width: 460px) {
  .featured-users > div {
    width: 100%;
  }
}

@media (max-width: 420px) {
  .ui-row-1,
  .ui-row-2 {
    padding-left: 10px;
    padding-right: 10px;
  }
  .clay-category,
  .large-banner {
    width: 90%;
  }
  .large-banner a {
    padding: 7px 12px;
  }
}

@media (max-width: 410px) {
  .ui-row-1 {
    padding: 30px 10px 20px 10px;
  }
  .profile-small svg {
    width: 20px;
    margin-right: 10px;
  }
  .logo-comp p {
    letter-spacing: 1px;
    margin-left: 7px;
  }
}

@media (max-width: 390px) {
  .featured-users > div > div:nth-child(1) > div:nth-child(2) > h3 {
    font-size: 12pt;
  }
}

@media (max-width: 375px) {
  .featured-users > div > div:nth-child(2)::after {
    right: unset;
    bottom: -40px;
    left: 0;
  }
  .featured-users > div {
    margin-bottom: 75px;
  }
  .featured-users > div:nth-child(4) {
    margin-bottom: 50px;
  }
}

@media (max-width: 335px) {
  .profile-small svg {
    width: 20px;
    margin-right: 5px;
  }
}

/** */
 /* Style for the dropdown block */
 /* Style for the dropdown block */
 /* Style for the dropdown content */
/* Add a black background color to the top navigation */
.topnav {
  overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  font-size: 17px;
}

/* Add an active class to highlight the current page */
.active {
}

/* Hide the link that should open and close the topnav on small screens */
.topnav .icon {
}

/* Dropdown container - needed to position the dropdown content */
.dropdown {
  float: left;
  overflow: hidden;
}

/* Style the dropdown button to fit inside the topnav */
.dropdown .dropbtn {
  font-size: 17px;
  border: none;
  outline: none;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

/* Style the dropdown content (hidden by default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: white;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Style the links inside the dropdown */
.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

/* Add a dark background on topnav links and the dropdown button on hover */
.topnav a:hover, .dropdown:hover .dropbtn {
  background-color: #555;
  color: white;
}

/* Add a grey background to dropdown links on hover */
.dropdown-content a:hover {
  background-color: #ddd;
  color: black;
}

/* Show the dropdown menu when the user moves the mouse over the dropdown button */
.dropdown:hover .dropdown-content {
  display: block;
}

/* When the screen is less than 600 pixels wide, hide all links, except for the first one ("Home"). Show the link that contains should open and close the topnav (.icon) */
@media screen and (max-width: 600px) {
  .topnav a:not(:first-child), .dropdown .dropbtn {
    display: none;
  }
  .topnav a.icon {
    float: right;
    display: block;
  }
}

/* The "responsive" class is added to the topnav with JavaScript when the user clicks on the icon. This class makes the topnav look good on small screens (display the links vertically instead of horizontally) */
@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive a.icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .topnav.responsive .dropdown {float: none;}
  .topnav.responsive .dropdown-content {position: relative;}
  .topnav.responsive .dropdown .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }
}


    
</style>
</head>

<body>
<div class="dashboard-river">

  <div class="dashboard-container">

    <div class="dashboard">

      <div class="ui-row-1">

        <div class="logo-comp">
          <div><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 297 297" xml:space="preserve">
              <g>
                <path d="M48.523,73.196h18.131c5.597,0,10.137-4.536,10.137-10.134c0-5.6-4.54-10.137-10.137-10.137H48.523 c-5.599,0-10.137,4.537-10.137,10.137C38.387,68.66,42.925,73.196,48.523,73.196z" />
                <path d="M47.628,123.657c0-5.598-4.54-10.137-10.137-10.137H19.357c-5.599,0-10.135,4.539-10.135,10.137 c0,5.597,4.536,10.135,10.135,10.135h18.134C43.088,133.792,47.628,129.254,47.628,123.657z" />
                <path d="M277.643,95.387h-18.135c-5.597,0-10.137,4.539-10.137,10.135c0,5.601,4.54,10.137,10.137,10.137h18.135 c5.599,0,10.135-4.536,10.135-10.137C287.777,99.926,283.241,95.387,277.643,95.387z" />
                <path d="M140.148,203.69v83.173c0,5.598,4.54,10.137,10.137,10.137c5.599,0,10.137-4.539,10.137-10.137V203.69h93.406 c5.597,0,10.137-4.539,10.137-10.136c0-5.598-4.54-10.137-10.137-10.137H227.05c3.911-8.197,5.898-17.617,5.898-28.209 c0-29.299-21.058-60.583-39.637-88.187c-5.055-7.506-9.829-14.599-13.809-21.124c-1.689-3.791-1.094-19.677,1.284-34.106 c0.487-2.938-0.344-5.942-2.271-8.212c-1.926-2.27-4.752-3.58-7.73-3.58h-40.998c-2.977,0-5.803,1.313-7.729,3.58 c-1.924,2.268-2.755,5.271-2.273,8.21c2.383,14.432,2.978,30.316,1.288,34.107c-3.984,6.527-8.759,13.619-13.813,21.126 c-18.579,27.604-39.639,58.887-39.639,88.186c0,10.592,1.987,20.012,5.902,28.209H46.745c-5.601,0-10.137,4.539-10.137,10.137 c0,5.597,4.536,10.136,10.137,10.136H140.148z M202.707,183.418H97.864c-6.701-7.003-9.968-16.27-9.968-28.209 c0-23.111,19.222-51.669,36.182-76.865c5.209-7.738,10.13-15.05,14.363-21.993c4.769-7.819,4.27-23.774,2.954-36.077h17.781 c-1.316,12.302-1.813,28.257,2.952,36.077c4.233,6.943,9.153,14.252,14.362,21.992c16.96,25.197,36.184,53.755,36.184,76.866 C212.675,167.148,209.406,176.417,202.707,183.418z" />
              </g>
            </svg></div>
          <p>Instrument & Electronics Inventory System</p>
        </div>

        <div class="search">
          <input type="search" id="search" name="search" placeholder="Search for instrument and electronics...">
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
          </svg>
        </div>

 
        <div class="topnav" id="myTopnav">
    <!-- First Dropdown -->
    <div class="dropdown">
        <button class="dropbtn">
            <img id="cart1" src="https://cdn-icons-png.flaticon.com/512/3106/3106773.png" alt="Cart Icon" width="24" height="24">
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <a href="#">Profile Details</a>
            <a href="#">Cart History</a>
            <a href="#">Logout</a>
        </div>
    </div>

    <!-- Second Dropdown -->
    <div class="dropdown">
        <button class="dropbtn">
            <img id="cart2" src="https://cdn-icons-png.flaticon.com/512/263/263142.png" alt="Cart Icon" width="24" height="24">
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <a href="#">Item 1</a>
            <a href="#">Item 2</a>
            <a href="#">Item 3</a>
        </div>
    </div>
</div>


      </div>

      <div class="ui-row-2">

        <div class="left-sidebar">

     

        </div>

        <div class="main-content">

          <div class="header">
        


            <div class="page-display">
              <h1>Stock</h1>
              <h2>Warehouse</h2>
            </div>

            <div class="clay-category">
              <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                <path d="M329.3 99.64l-39.7 10.46c-30.2 26.1-62.7 50.9-96.7 75.1l-6.7 21-34.1 7.3c-22.6 15.3-45.6 30.4-68.82 45.5l120.32 18.4 213.9-167.1c-27.7-3.8-56.9-7.5-88.2-10.66zm103.4 21.56l-61.4 47.9-43 53.1-45 15.7-65 50.7 20.8 115.1c65.6-54.6 127.6-109.4 187-163.1l-5.6-31.2 42.1-1.9c8.3-7.4 16.5-14.9 24.6-22.3zM61.58 277.6c-21.15 39.9-32.01 70.6-36.83 95.8 9.21 1.1 18.3 2.2 27.28 3.5l16.76-30.6 5.52 34c53.29 8.6 103.09 20.5 152.19 32.1l-26.9-117.6-66-10.1z" />
              </svg>
              <p id="PLCHMI">Student</p>
            </div>

            <div class="clay-category">
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 49.382 49.382" xml:space="preserve">
                <g>
                  <path d="M48.654,12.775c-0.333-1.618-1.912-2.886-3.594-2.886h-7.082c-0.159-3.128-0.308-5.418-0.308-5.418
		c-0.692-2.269-1.817-4.059-4.058-4.059H5.745c-2.242,0-3.35,1.767-4.059,4.059c0,0-0.656,11.177-0.589,17.397
		c0.037,6.967,4.344,17.398,4.344,17.398c0.411,1.271,0.912,2.334,1.627,3.058H0.951c-0.957,0-1.239,0.6-0.629,1.337l3.28,3.972
		c0.609,0.738,1.88,1.336,2.837,1.336h28.309c0.957,0,2.116-0.676,2.586-1.509l2.05-3.626c0.472-0.833,0.076-1.51-0.88-1.51h-5.943
		c0.758-0.747,1.279-1.837,1.644-3.058c0,0,1.768-4.524,2.998-9.548l2.222,0.899c0.523,0.212,1.125,0.314,1.736,0.314
		c0.966,0,1.956-0.257,2.705-0.744l2.294-1.494c1.156-0.753,2.238-2.286,2.517-3.566c0.345-1.588,0.746-3.975,0.701-6.329
		C49.332,16.507,48.96,14.258,48.654,12.775z M45.744,24.491c-0.112,0.516-0.729,1.368-1.222,1.689l-2.294,1.494
		c-0.396,0.257-1.241,0.341-1.679,0.162l-2.704-1.093c0.313-1.71,0.516-3.386,0.516-4.875c0-2.686-0.109-5.981-0.24-8.98h6.939
		c0.28,0,0.612,0.281,0.655,0.49c0.28,1.359,0.621,3.413,0.661,5.477C46.417,20.92,46.055,23.059,45.744,24.491z" />
                </g>
              </svg>
              <p id="Gaming">Gaming</p>
            </div>
            <div class="clay-category">
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 49.382 49.382" xml:space="preserve">
                <g>
                  <path d="M48.654,12.775c-0.333-1.618-1.912-2.886-3.594-2.886h-7.082c-0.159-3.128-0.308-5.418-0.308-5.418
		c-0.692-2.269-1.817-4.059-4.058-4.059H5.745c-2.242,0-3.35,1.767-4.059,4.059c0,0-0.656,11.177-0.589,17.397
		c0.037,6.967,4.344,17.398,4.344,17.398c0.411,1.271,0.912,2.334,1.627,3.058H0.951c-0.957,0-1.239,0.6-0.629,1.337l3.28,3.972
		c0.609,0.738,1.88,1.336,2.837,1.336h28.309c0.957,0,2.116-0.676,2.586-1.509l2.05-3.626c0.472-0.833,0.076-1.51-0.88-1.51h-5.943
		c0.758-0.747,1.279-1.837,1.644-3.058c0,0,1.768-4.524,2.998-9.548l2.222,0.899c0.523,0.212,1.125,0.314,1.736,0.314
		c0.966,0,1.956-0.257,2.705-0.744l2.294-1.494c1.156-0.753,2.238-2.286,2.517-3.566c0.345-1.588,0.746-3.975,0.701-6.329
		C49.332,16.507,48.96,14.258,48.654,12.775z M45.744,24.491c-0.112,0.516-0.729,1.368-1.222,1.689l-2.294,1.494
		c-0.396,0.257-1.241,0.341-1.679,0.162l-2.704-1.093c0.313-1.71,0.516-3.386,0.516-4.875c0-2.686-0.109-5.981-0.24-8.98h6.939
		c0.28,0,0.612,0.281,0.655,0.49c0.28,1.359,0.621,3.413,0.661,5.477C46.417,20.92,46.055,23.059,45.744,24.491z" />
                </g>
              </svg>
              <p id="ElectronicsCompenent2">Home</p>
            </div>
            <div class="clay-category">
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 344.713 344.713" xml:space="preserve">
                <g>
                  <path d="M190.028,70.017c0.06-0.669,0.095-1.345,0.095-2.029c0-12.498-10.133-22.631-22.631-22.631
		c-12.498,0-22.631,10.133-22.631,22.631c0,0.684,0.036,1.36,0.095,2.029c-28.722,5.488-53.793,21.255-71.226,43.34h187.523
		C243.821,91.272,218.748,75.505,190.028,70.017z" />
                  <path d="M332.677,135.951c-8.831-9.86-21.559-15.291-35.84-15.291c-5.602,0-11.367,0.84-17.137,2.498
		c-10.46,3.005-19.25,6.371-26.63,10.198H64.187L7.977,91.708c-1.518-1.124-3.54-1.298-5.226-0.448C1.064,92.109,0,93.837,0,95.726
		v32.652c0,1.111,0.37,2.191,1.052,3.068l47.147,60.669c1.97,49.349,33.893,90.99,78.086,107.242h82.414
		c30.765-11.314,55.565-34.94,68.472-64.896c1.013,0.297,2.023,0.578,3.028,0.825c4.161,1.024,8.292,1.544,12.28,1.544
		c31.204,0,48.524-30.373,51.847-60.473C346.062,160.627,341.926,146.277,332.677,135.951z M103.088,234.714
		c-1.137,0.645-2.373,0.951-3.593,0.951c-2.54,0-5.008-1.329-6.351-3.695c-6.043-10.652-9.238-22.788-9.237-35.096
		c0-4.028,3.266-7.294,7.294-7.294h0.001c4.028,0,7.293,3.266,7.293,7.295c0,9.789,2.537,19.436,7.337,27.896
		C107.82,228.275,106.591,232.726,103.088,234.714z M139.897,259.392c-1.085,2.95-3.876,4.778-6.846,4.778
		c-0.836,0-1.687-0.145-2.517-0.451c-6.085-2.238-11.844-5.306-17.115-9.119c-3.264-2.361-3.996-6.92-1.636-10.184
		c2.361-3.264,6.921-3.997,10.185-1.636c4.191,3.031,8.768,5.47,13.602,7.249C139.351,251.42,141.289,255.611,139.897,259.392z
		 M314.506,173.064c-1.289,11.679-7.552,33.766-22.028,33.766c-1.573,0-3.291-0.227-5.107-0.674
		c-0.628-0.155-1.264-0.334-1.901-0.524c0.924-5.986,1.413-12.116,1.413-18.361c0-11.623-1.674-22.853-4.773-33.476
		c1.877-0.614,3.833-1.216,5.874-1.803c3.076-0.883,6.055-1.331,8.854-1.331c5.718,0,10.384,1.834,13.493,5.305
		C313.862,159.91,315.307,165.822,314.506,173.064z" />
                </g>
              </svg>
              <p id="HydraulicPneumatics">Work</p>
            </div>

          </div>

          <div class="large-banner">

            <h2>Explore a World of Industrial Automation</h2>
            <a href="/clientdashboard" title="Explore">
              Take a Look
            </a>

          </div>

          <hr>
          <br>



          <h3>Recommendation & Trend for you</h3>

      

          <div class="featured-clay">

            <div>

              <div></div>

              <div>
                <h3>PLC</h3>
                <p>PLC stands for "Programmable Logic Controller." It is a specialized industrial computer used for automating processes in manufacturing plants, factories, and other industrial environments. PLCs are designed to perform control functions and automate tasks such as controlling machinery, processing data, and interfacing with other devices in an industrial setting.</p>
                <a href="/clientplc" title="featured clay">Procure</a>
              </div>

            </div>

            <div>

              <div></div>

              <div>
                <h3>HMI</h3>
                <br>
                <p>HMI stands for "Human-Machine Interface." It refers to the technology and devices that allow humans to interact with and control machines or automated systems. HMIs serve as a bridge between humans and the industrial equipment or processes they are monitoring or controlling.</p>
                <br>
                <br>
                <br>
                <a href="/clienthmi" title="featured clay">Procure</a>
              </div>

            </div>

            <div>

              <div></div>

              <div>
                <h3>Industrial PC</h3>
                <p>An Industrial PC (IPC) is a type of computer specifically designed and built to operate reliably in industrial environments. These environments can include manufacturing facilities, factories, automation systems, control rooms, and other industrial settings where standard office-grade computers may not be suitable due to harsh conditions, temperature extremes, dust, moisture, and other factors.</p>
                <a href="/clientipc" title="featured clay">Procure</a>
              </div>

            </div>

            <div>

              <div></div>

              <div>
                <h3>Electronic Component</h3>
                <p>Electronic components are individual devices or elements that are used as building blocks in electronic circuits to perform specific functions. These components are combined and connected in various ways to create electronic systems and devices. Electronic components can be either passive or active, depending on their ability to control or manipulate electrical signals.</p>
                <a href="/clientec" title="featured clay">Procure</a>
              </div>

            </div>

            <div>

              <div></div>

              <div>
                <h3>Hydraulics Device</h3>
                <br>
                <br>
                <p>Hydraulics is a branch of engineering and science that deals with the mechanical properties of fluids, particularly liquids like water or oil, and their application in various mechanical systems. A hydraulic device uses the principles of fluid dynamics to transmit power or control motion.</p>
                <br>
                <br>
                <br>
                <br>
                <br>

                <a href="/clienthydraulic" title="featured clay">Procure</a>
              </div>

            </div>

            <div>

              <div></div>

              <div>
                <h3>Pneumatics Device</h3>
                <p>Pneumatics is a branch of engineering and technology that deals with the study and application of pressurized gas (usually air) to produce mechanical motion or perform work. Pneumatic devices use compressed air to transmit power and control the movement of components in various mechanical systems. Pneumatics is widely used in industries where clean and dry air is readily available, making it suitable for a range of applications.</p>
                <a href="/clientpneumatics" title="featured clay">Procure</a>
              </div>

            </div>

          </div>

          <hr>

          <div class="featured-users">

            <h2>Automation<br><span>Supplier</span></h2>

            <div>

              <div>

                <div></div>

                <div>
                  <h3>Siemens</h3>

                  <div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                      <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                      <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                      <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                      <path d="M3.362 10.11c0 .926-.756 1.681-1.681 1.681S0 11.036 0 10.111C0 9.186.756 8.43 1.68 8.43h1.682v1.68zm.846 0c0-.924.756-1.68 1.681-1.68s1.681.756 1.681 1.68v4.21c0 .924-.756 1.68-1.68 1.68a1.685 1.685 0 0 1-1.682-1.68v-4.21zM5.89 3.362c-.926 0-1.682-.756-1.682-1.681S4.964 0 5.89 0s1.68.756 1.68 1.68v1.682H5.89zm0 .846c.924 0 1.68.756 1.68 1.681S6.814 7.57 5.89 7.57H1.68C.757 7.57 0 6.814 0 5.89c0-.926.756-1.682 1.68-1.682h4.21zm6.749 1.682c0-.926.755-1.682 1.68-1.682.925 0 1.681.756 1.681 1.681s-.756 1.681-1.68 1.681h-1.681V5.89zm-.848 0c0 .924-.755 1.68-1.68 1.68A1.685 1.685 0 0 1 8.43 5.89V1.68C8.43.757 9.186 0 10.11 0c.926 0 1.681.756 1.681 1.68v4.21zm-1.681 6.748c.926 0 1.682.756 1.682 1.681S11.036 16 10.11 16s-1.681-.756-1.681-1.68v-1.682h1.68zm0-.847c-.924 0-1.68-.755-1.68-1.68 0-.925.756-1.681 1.68-1.681h4.21c.924 0 1.68.756 1.68 1.68 0 .926-.756 1.681-1.68 1.681h-4.21z" />
                    </svg>
                  </div>

                </div>

              </div>

              <div>

                <div>
                  <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                    <path d="M329.3 99.64l-39.7 10.46c-30.2 26.1-62.7 50.9-96.7 75.1l-6.7 21-34.1 7.3c-22.6 15.3-45.6 30.4-68.82 45.5l120.32 18.4 213.9-167.1c-27.7-3.8-56.9-7.5-88.2-10.66zm103.4 21.56l-61.4 47.9-43 53.1-45 15.7-65 50.7 20.8 115.1c65.6-54.6 127.6-109.4 187-163.1l-5.6-31.2 42.1-1.9c8.3-7.4 16.5-14.9 24.6-22.3zM61.58 277.6c-21.15 39.9-32.01 70.6-36.83 95.8 9.21 1.1 18.3 2.2 27.28 3.5l16.76-30.6 5.52 34c53.29 8.6 103.09 20.5 152.19 32.1l-26.9-117.6-66-10.1z" />
                  </svg>
                </div>

                <div>
                  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 49.382 49.382" xml:space="preserve">
                    <g>
                      <path d="M48.654,12.775c-0.333-1.618-1.912-2.886-3.594-2.886h-7.082c-0.159-3.128-0.308-5.418-0.308-5.418
		c-0.692-2.269-1.817-4.059-4.058-4.059H5.745c-2.242,0-3.35,1.767-4.059,4.059c0,0-0.656,11.177-0.589,17.397
		c0.037,6.967,4.344,17.398,4.344,17.398c0.411,1.271,0.912,2.334,1.627,3.058H0.951c-0.957,0-1.239,0.6-0.629,1.337l3.28,3.972
		c0.609,0.738,1.88,1.336,2.837,1.336h28.309c0.957,0,2.116-0.676,2.586-1.509l2.05-3.626c0.472-0.833,0.076-1.51-0.88-1.51h-5.943
		c0.758-0.747,1.279-1.837,1.644-3.058c0,0,1.768-4.524,2.998-9.548l2.222,0.899c0.523,0.212,1.125,0.314,1.736,0.314
		c0.966,0,1.956-0.257,2.705-0.744l2.294-1.494c1.156-0.753,2.238-2.286,2.517-3.566c0.345-1.588,0.746-3.975,0.701-6.329
		C49.332,16.507,48.96,14.258,48.654,12.775z M45.744,24.491c-0.112,0.516-0.729,1.368-1.222,1.689l-2.294,1.494
		c-0.396,0.257-1.241,0.341-1.679,0.162l-2.704-1.093c0.313-1.71,0.516-3.386,0.516-4.875c0-2.686-0.109-5.981-0.24-8.98h6.939
		c0.28,0,0.612,0.281,0.655,0.49c0.28,1.359,0.621,3.413,0.661,5.477C46.417,20.92,46.055,23.059,45.744,24.491z" />
                    </g>
                  </svg>
                </div>

                <div>
                  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 344.713 344.713" xml:space="preserve">
                    <g>
                      <path d="M190.028,70.017c0.06-0.669,0.095-1.345,0.095-2.029c0-12.498-10.133-22.631-22.631-22.631
		c-12.498,0-22.631,10.133-22.631,22.631c0,0.684,0.036,1.36,0.095,2.029c-28.722,5.488-53.793,21.255-71.226,43.34h187.523
		C243.821,91.272,218.748,75.505,190.028,70.017z" />
                      <path d="M332.677,135.951c-8.831-9.86-21.559-15.291-35.84-15.291c-5.602,0-11.367,0.84-17.137,2.498
		c-10.46,3.005-19.25,6.371-26.63,10.198H64.187L7.977,91.708c-1.518-1.124-3.54-1.298-5.226-0.448C1.064,92.109,0,93.837,0,95.726
		v32.652c0,1.111,0.37,2.191,1.052,3.068l47.147,60.669c1.97,49.349,33.893,90.99,78.086,107.242h82.414
		c30.765-11.314,55.565-34.94,68.472-64.896c1.013,0.297,2.023,0.578,3.028,0.825c4.161,1.024,8.292,1.544,12.28,1.544
		c31.204,0,48.524-30.373,51.847-60.473C346.062,160.627,341.926,146.277,332.677,135.951z M103.088,234.714
		c-1.137,0.645-2.373,0.951-3.593,0.951c-2.54,0-5.008-1.329-6.351-3.695c-6.043-10.652-9.238-22.788-9.237-35.096
		c0-4.028,3.266-7.294,7.294-7.294h0.001c4.028,0,7.293,3.266,7.293,7.295c0,9.789,2.537,19.436,7.337,27.896
		C107.82,228.275,106.591,232.726,103.088,234.714z M139.897,259.392c-1.085,2.95-3.876,4.778-6.846,4.778
		c-0.836,0-1.687-0.145-2.517-0.451c-6.085-2.238-11.844-5.306-17.115-9.119c-3.264-2.361-3.996-6.92-1.636-10.184
		c2.361-3.264,6.921-3.997,10.185-1.636c4.191,3.031,8.768,5.47,13.602,7.249C139.351,251.42,141.289,255.611,139.897,259.392z
		 M314.506,173.064c-1.289,11.679-7.552,33.766-22.028,33.766c-1.573,0-3.291-0.227-5.107-0.674
		c-0.628-0.155-1.264-0.334-1.901-0.524c0.924-5.986,1.413-12.116,1.413-18.361c0-11.623-1.674-22.853-4.773-33.476
		c1.877-0.614,3.833-1.216,5.874-1.803c3.076-0.883,6.055-1.331,8.854-1.331c5.718,0,10.384,1.834,13.493,5.305
		C313.862,159.91,315.307,165.822,314.506,173.064z" />
                    </g>
                  </svg>
                </div>

              </div>

            </div>

            <div>

              <div>

                <div></div>

                <div>
                  <h3>Schneider Electric</h3>

                  <div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                      <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                      <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                      <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                      <path d="M3.362 10.11c0 .926-.756 1.681-1.681 1.681S0 11.036 0 10.111C0 9.186.756 8.43 1.68 8.43h1.682v1.68zm.846 0c0-.924.756-1.68 1.681-1.68s1.681.756 1.681 1.68v4.21c0 .924-.756 1.68-1.68 1.68a1.685 1.685 0 0 1-1.682-1.68v-4.21zM5.89 3.362c-.926 0-1.682-.756-1.682-1.681S4.964 0 5.89 0s1.68.756 1.68 1.68v1.682H5.89zm0 .846c.924 0 1.68.756 1.68 1.681S6.814 7.57 5.89 7.57H1.68C.757 7.57 0 6.814 0 5.89c0-.926.756-1.682 1.68-1.682h4.21zm6.749 1.682c0-.926.755-1.682 1.68-1.682.925 0 1.681.756 1.681 1.681s-.756 1.681-1.68 1.681h-1.681V5.89zm-.848 0c0 .924-.755 1.68-1.68 1.68A1.685 1.685 0 0 1 8.43 5.89V1.68C8.43.757 9.186 0 10.11 0c.926 0 1.681.756 1.681 1.68v4.21zm-1.681 6.748c.926 0 1.682.756 1.682 1.681S11.036 16 10.11 16s-1.681-.756-1.681-1.68v-1.682h1.68zm0-.847c-.924 0-1.68-.755-1.68-1.68 0-.925.756-1.681 1.68-1.681h4.21c.924 0 1.68.756 1.68 1.68 0 .926-.756 1.681-1.68 1.681h-4.21z" />
                    </svg>
                  </div>

                </div>

              </div>

              <div>

                <div>
                  <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                    <path d="M329.3 99.64l-39.7 10.46c-30.2 26.1-62.7 50.9-96.7 75.1l-6.7 21-34.1 7.3c-22.6 15.3-45.6 30.4-68.82 45.5l120.32 18.4 213.9-167.1c-27.7-3.8-56.9-7.5-88.2-10.66zm103.4 21.56l-61.4 47.9-43 53.1-45 15.7-65 50.7 20.8 115.1c65.6-54.6 127.6-109.4 187-163.1l-5.6-31.2 42.1-1.9c8.3-7.4 16.5-14.9 24.6-22.3zM61.58 277.6c-21.15 39.9-32.01 70.6-36.83 95.8 9.21 1.1 18.3 2.2 27.28 3.5l16.76-30.6 5.52 34c53.29 8.6 103.09 20.5 152.19 32.1l-26.9-117.6-66-10.1z" />
                  </svg>
                </div>

                <div>
                  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 49.382 49.382" xml:space="preserve">
                    <g>
                      <path d="M48.654,12.775c-0.333-1.618-1.912-2.886-3.594-2.886h-7.082c-0.159-3.128-0.308-5.418-0.308-5.418
		c-0.692-2.269-1.817-4.059-4.058-4.059H5.745c-2.242,0-3.35,1.767-4.059,4.059c0,0-0.656,11.177-0.589,17.397
		c0.037,6.967,4.344,17.398,4.344,17.398c0.411,1.271,0.912,2.334,1.627,3.058H0.951c-0.957,0-1.239,0.6-0.629,1.337l3.28,3.972
		c0.609,0.738,1.88,1.336,2.837,1.336h28.309c0.957,0,2.116-0.676,2.586-1.509l2.05-3.626c0.472-0.833,0.076-1.51-0.88-1.51h-5.943
		c0.758-0.747,1.279-1.837,1.644-3.058c0,0,1.768-4.524,2.998-9.548l2.222,0.899c0.523,0.212,1.125,0.314,1.736,0.314
		c0.966,0,1.956-0.257,2.705-0.744l2.294-1.494c1.156-0.753,2.238-2.286,2.517-3.566c0.345-1.588,0.746-3.975,0.701-6.329
		C49.332,16.507,48.96,14.258,48.654,12.775z M45.744,24.491c-0.112,0.516-0.729,1.368-1.222,1.689l-2.294,1.494
		c-0.396,0.257-1.241,0.341-1.679,0.162l-2.704-1.093c0.313-1.71,0.516-3.386,0.516-4.875c0-2.686-0.109-5.981-0.24-8.98h6.939
		c0.28,0,0.612,0.281,0.655,0.49c0.28,1.359,0.621,3.413,0.661,5.477C46.417,20.92,46.055,23.059,45.744,24.491z" />
                    </g>
                  </svg>
                </div>

                <div>
                  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 344.713 344.713" xml:space="preserve">
                    <g>
                      <path d="M190.028,70.017c0.06-0.669,0.095-1.345,0.095-2.029c0-12.498-10.133-22.631-22.631-22.631
		c-12.498,0-22.631,10.133-22.631,22.631c0,0.684,0.036,1.36,0.095,2.029c-28.722,5.488-53.793,21.255-71.226,43.34h187.523
		C243.821,91.272,218.748,75.505,190.028,70.017z" />
                      <path d="M332.677,135.951c-8.831-9.86-21.559-15.291-35.84-15.291c-5.602,0-11.367,0.84-17.137,2.498
		c-10.46,3.005-19.25,6.371-26.63,10.198H64.187L7.977,91.708c-1.518-1.124-3.54-1.298-5.226-0.448C1.064,92.109,0,93.837,0,95.726
		v32.652c0,1.111,0.37,2.191,1.052,3.068l47.147,60.669c1.97,49.349,33.893,90.99,78.086,107.242h82.414
		c30.765-11.314,55.565-34.94,68.472-64.896c1.013,0.297,2.023,0.578,3.028,0.825c4.161,1.024,8.292,1.544,12.28,1.544
		c31.204,0,48.524-30.373,51.847-60.473C346.062,160.627,341.926,146.277,332.677,135.951z M103.088,234.714
		c-1.137,0.645-2.373,0.951-3.593,0.951c-2.54,0-5.008-1.329-6.351-3.695c-6.043-10.652-9.238-22.788-9.237-35.096
		c0-4.028,3.266-7.294,7.294-7.294h0.001c4.028,0,7.293,3.266,7.293,7.295c0,9.789,2.537,19.436,7.337,27.896
		C107.82,228.275,106.591,232.726,103.088,234.714z M139.897,259.392c-1.085,2.95-3.876,4.778-6.846,4.778
		c-0.836,0-1.687-0.145-2.517-0.451c-6.085-2.238-11.844-5.306-17.115-9.119c-3.264-2.361-3.996-6.92-1.636-10.184
		c2.361-3.264,6.921-3.997,10.185-1.636c4.191,3.031,8.768,5.47,13.602,7.249C139.351,251.42,141.289,255.611,139.897,259.392z
		 M314.506,173.064c-1.289,11.679-7.552,33.766-22.028,33.766c-1.573,0-3.291-0.227-5.107-0.674
		c-0.628-0.155-1.264-0.334-1.901-0.524c0.924-5.986,1.413-12.116,1.413-18.361c0-11.623-1.674-22.853-4.773-33.476
		c1.877-0.614,3.833-1.216,5.874-1.803c3.076-0.883,6.055-1.331,8.854-1.331c5.718,0,10.384,1.834,13.493,5.305
		C313.862,159.91,315.307,165.822,314.506,173.064z" />
                    </g>
                  </svg>
                </div>

              </div>

            </div>

            <div>

              <div>

                <div></div>

                <div>
                  <h3>SMC</h3>

                  <div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                      <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                      <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                      <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                      <path d="M3.362 10.11c0 .926-.756 1.681-1.681 1.681S0 11.036 0 10.111C0 9.186.756 8.43 1.68 8.43h1.682v1.68zm.846 0c0-.924.756-1.68 1.681-1.68s1.681.756 1.681 1.68v4.21c0 .924-.756 1.68-1.68 1.68a1.685 1.685 0 0 1-1.682-1.68v-4.21zM5.89 3.362c-.926 0-1.682-.756-1.682-1.681S4.964 0 5.89 0s1.68.756 1.68 1.68v1.682H5.89zm0 .846c.924 0 1.68.756 1.68 1.681S6.814 7.57 5.89 7.57H1.68C.757 7.57 0 6.814 0 5.89c0-.926.756-1.682 1.68-1.682h4.21zm6.749 1.682c0-.926.755-1.682 1.68-1.682.925 0 1.681.756 1.681 1.681s-.756 1.681-1.68 1.681h-1.681V5.89zm-.848 0c0 .924-.755 1.68-1.68 1.68A1.685 1.685 0 0 1 8.43 5.89V1.68C8.43.757 9.186 0 10.11 0c.926 0 1.681.756 1.681 1.68v4.21zm-1.681 6.748c.926 0 1.682.756 1.682 1.681S11.036 16 10.11 16s-1.681-.756-1.681-1.68v-1.682h1.68zm0-.847c-.924 0-1.68-.755-1.68-1.68 0-.925.756-1.681 1.68-1.681h4.21c.924 0 1.68.756 1.68 1.68 0 .926-.756 1.681-1.68 1.681h-4.21z" />
                    </svg>
                  </div>

                </div>

              </div>

              <div>

                <div>
                  <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                    <path d="M329.3 99.64l-39.7 10.46c-30.2 26.1-62.7 50.9-96.7 75.1l-6.7 21-34.1 7.3c-22.6 15.3-45.6 30.4-68.82 45.5l120.32 18.4 213.9-167.1c-27.7-3.8-56.9-7.5-88.2-10.66zm103.4 21.56l-61.4 47.9-43 53.1-45 15.7-65 50.7 20.8 115.1c65.6-54.6 127.6-109.4 187-163.1l-5.6-31.2 42.1-1.9c8.3-7.4 16.5-14.9 24.6-22.3zM61.58 277.6c-21.15 39.9-32.01 70.6-36.83 95.8 9.21 1.1 18.3 2.2 27.28 3.5l16.76-30.6 5.52 34c53.29 8.6 103.09 20.5 152.19 32.1l-26.9-117.6-66-10.1z" />
                  </svg>
                </div>

                <div>
                  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 49.382 49.382" xml:space="preserve">
                    <g>
                      <path d="M48.654,12.775c-0.333-1.618-1.912-2.886-3.594-2.886h-7.082c-0.159-3.128-0.308-5.418-0.308-5.418
		c-0.692-2.269-1.817-4.059-4.058-4.059H5.745c-2.242,0-3.35,1.767-4.059,4.059c0,0-0.656,11.177-0.589,17.397
		c0.037,6.967,4.344,17.398,4.344,17.398c0.411,1.271,0.912,2.334,1.627,3.058H0.951c-0.957,0-1.239,0.6-0.629,1.337l3.28,3.972
		c0.609,0.738,1.88,1.336,2.837,1.336h28.309c0.957,0,2.116-0.676,2.586-1.509l2.05-3.626c0.472-0.833,0.076-1.51-0.88-1.51h-5.943
		c0.758-0.747,1.279-1.837,1.644-3.058c0,0,1.768-4.524,2.998-9.548l2.222,0.899c0.523,0.212,1.125,0.314,1.736,0.314
		c0.966,0,1.956-0.257,2.705-0.744l2.294-1.494c1.156-0.753,2.238-2.286,2.517-3.566c0.345-1.588,0.746-3.975,0.701-6.329
		C49.332,16.507,48.96,14.258,48.654,12.775z M45.744,24.491c-0.112,0.516-0.729,1.368-1.222,1.689l-2.294,1.494
		c-0.396,0.257-1.241,0.341-1.679,0.162l-2.704-1.093c0.313-1.71,0.516-3.386,0.516-4.875c0-2.686-0.109-5.981-0.24-8.98h6.939
		c0.28,0,0.612,0.281,0.655,0.49c0.28,1.359,0.621,3.413,0.661,5.477C46.417,20.92,46.055,23.059,45.744,24.491z" />
                    </g>
                  </svg>
                </div>

                <div>
                  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 344.713 344.713" xml:space="preserve">
                    <g>
                      <path d="M190.028,70.017c0.06-0.669,0.095-1.345,0.095-2.029c0-12.498-10.133-22.631-22.631-22.631
		c-12.498,0-22.631,10.133-22.631,22.631c0,0.684,0.036,1.36,0.095,2.029c-28.722,5.488-53.793,21.255-71.226,43.34h187.523
		C243.821,91.272,218.748,75.505,190.028,70.017z" />
                      <path d="M332.677,135.951c-8.831-9.86-21.559-15.291-35.84-15.291c-5.602,0-11.367,0.84-17.137,2.498
		c-10.46,3.005-19.25,6.371-26.63,10.198H64.187L7.977,91.708c-1.518-1.124-3.54-1.298-5.226-0.448C1.064,92.109,0,93.837,0,95.726
		v32.652c0,1.111,0.37,2.191,1.052,3.068l47.147,60.669c1.97,49.349,33.893,90.99,78.086,107.242h82.414
		c30.765-11.314,55.565-34.94,68.472-64.896c1.013,0.297,2.023,0.578,3.028,0.825c4.161,1.024,8.292,1.544,12.28,1.544
		c31.204,0,48.524-30.373,51.847-60.473C346.062,160.627,341.926,146.277,332.677,135.951z M103.088,234.714
		c-1.137,0.645-2.373,0.951-3.593,0.951c-2.54,0-5.008-1.329-6.351-3.695c-6.043-10.652-9.238-22.788-9.237-35.096
		c0-4.028,3.266-7.294,7.294-7.294h0.001c4.028,0,7.293,3.266,7.293,7.295c0,9.789,2.537,19.436,7.337,27.896
		C107.82,228.275,106.591,232.726,103.088,234.714z M139.897,259.392c-1.085,2.95-3.876,4.778-6.846,4.778
		c-0.836,0-1.687-0.145-2.517-0.451c-6.085-2.238-11.844-5.306-17.115-9.119c-3.264-2.361-3.996-6.92-1.636-10.184
		c2.361-3.264,6.921-3.997,10.185-1.636c4.191,3.031,8.768,5.47,13.602,7.249C139.351,251.42,141.289,255.611,139.897,259.392z
		 M314.506,173.064c-1.289,11.679-7.552,33.766-22.028,33.766c-1.573,0-3.291-0.227-5.107-0.674
		c-0.628-0.155-1.264-0.334-1.901-0.524c0.924-5.986,1.413-12.116,1.413-18.361c0-11.623-1.674-22.853-4.773-33.476
		c1.877-0.614,3.833-1.216,5.874-1.803c3.076-0.883,6.055-1.331,8.854-1.331c5.718,0,10.384,1.834,13.493,5.305
		C313.862,159.91,315.307,165.822,314.506,173.064z" />
                    </g>
                  </svg>
                </div>

              </div>

            </div>

          </div>

        </div>

      </div>

    </div>

  </div>

</div>

</body>
<script>
//              <p id="HydraulicPneumatics">Hydraulics & Pneumatics Valve</p>
document.getElementById('HydraulicPneumatics').addEventListener('click', function() {
            //alert('Hydraulic and Pneumatics');
            //clienthydraulic

            //Work Category
            window.location.href = '/clienthydraulic';

});
//              <p id="PLCHMI">PLC & HMI</p>
document.getElementById('PLCHMI').addEventListener('click', function() {
            //alert('PLCHMI');

            // Student Category
            window.location.href = '/clienthmi';

});

///              <p id="ElectronicsCompenent">Electronics Component</p>
document.getElementById('ElectronicsCompenent2').addEventListener('click', function() {
  //alert("");
  // Home Category
  window.location.href = '/clientplc';
});


///              <p id="ElectronicsCompenent">Electronics Component</p>
document.getElementById('Gaming').addEventListener('click', function() {
  //alert("");
  // Gaming Category
  window.location.href = '/clientipc';
});


// Cart JavaSCript

</script>

</html>