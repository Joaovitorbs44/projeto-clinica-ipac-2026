<?php

$thinkers = [
  [
    'initials' => 'BS',
    'name' => 'B. F. Skinner',
    'role' => 'Psicólogo e propositor do Behaviorismo Radical',
    'quote' => 'Não escolha a menor dor. Escolha a vida que vale a pena ser vivida.'
  ],
  [
    'initials' => 'SH',
    'name' => 'Steven C. Hayes',
    'role' => 'Psicólogo e criador da ACT',
    'quote' => 'Sofrer é uma parte natural de ser humano, mas a dor só vira sofrimento quando tentamos fugir dela.'
  ],
  [
    'initials' => 'KT',
    'name' => 'R. Kohlenberg & M. Tsai',
    'role' => 'Criadores da Psicoterapia Analítico-Funcional (FAP)',
    'quote' => 'A intimidade e a transformação real acontecem no momento presente da relação terapêutica.'
  ],
];

?>

<style>
  .thinker-glass {
    position: relative;

    display: inline-flex;
    align-items: center;

    gap: 12px;

    min-height: 58px;

    padding: 7px 20px 7px 8px;

    border-radius: 999px;

    overflow: hidden;

    background:
      linear-gradient(
        105deg,
        rgba(154, 170, 0, 0.10) 0%,
        rgba(255, 255, 255, 0.68) 30%,
        rgba(255, 255, 255, 0.52) 68%,
        rgba(250, 250, 250, 0.38) 100%
      );

    border: 1px solid rgba(255, 255, 255, 0.95);

    box-shadow:
      0 12px 32px rgba(24, 24, 27, 0.08),
      0 3px 8px rgba(24, 24, 27, 0.04),
      inset 0 1px 0 rgba(255, 255, 255, 1),
      inset 0 -1px 0 rgba(255, 255, 255, 0.32);

    backdrop-filter: blur(22px) saturate(180%);
    -webkit-backdrop-filter: blur(22px) saturate(180%);
  }


  /* brilho difuso no lado esquerdo */
  .thinker-glass::before {
    content: "";

    position: absolute;

    width: 84px;
    height: 84px;

    left: -28px;
    top: 50%;

    transform: translateY(-50%);

    border-radius: 50%;

    background: rgba(154, 170, 0, 0.18);

    filter: blur(25px);

    pointer-events: none;
  }


  /* reflexo superior do vidro */
  .thinker-glass::after {
    content: "";

    position: absolute;

    height: 1px;

    top: 0;
    left: 14%;
    right: 14%;

    background: linear-gradient(
      90deg,
      transparent,
      rgba(255, 255, 255, 1),
      transparent
    );

    opacity: 0.9;

    pointer-events: none;
  }


  .thinker-initials {
    position: relative;
    z-index: 2;

    display: flex;

    align-items: center;
    justify-content: center;

    width: 42px;
    height: 42px;

    flex-shrink: 0;

    border-radius: 999px;

    color: rgba(255, 255, 255, 0.96);

    font-size: 10px;
    font-weight: 600;

    background:
      linear-gradient(
        145deg,
        rgba(88, 94, 80, 0.82),
        rgba(105, 111, 99, 0.72)
      );

    border: 1px solid rgba(255, 255, 255, 0.32);

    box-shadow:
      inset 0 1px 1px rgba(255, 255, 255, 0.18),
      0 4px 12px rgba(24, 24, 27, 0.10);
  }


  .thinker-info {
    position: relative;
    z-index: 2;

    display: flex;
    flex-direction: column;

    gap: 3px;

    min-width: 0;
  }


  .thinker-name {
    color: #27272a;

    font-size: 13px;
    font-weight: 600;

    line-height: 1.2;
  }


  .thinker-role {
    color: #71717a;

    max-width: 200px;

    font-size: 10px;

    line-height: 1.35;
  }


  @media (max-width: 424px) {

    .thinker-glass {
      min-height: 54px;

      gap: 10px;

      padding:
        6px
        16px
        6px
        7px;
    }


    .thinker-initials {
      width: 38px;
      height: 38px;

      font-size: 9px;
    }


    .thinker-name {
      font-size: 12px;
    }


    .thinker-role {
      max-width: 175px;

      font-size: 9px;
    }

  }
</style>


<section class="relative
                w-full
                overflow-hidden
                bg-white
                px-4
                min-[375px]:px-5
                min-[425px]:px-6
                md:px-12
                lg:px-20
                min-[1440px]:px-20
                py-16
                min-[375px]:py-[72px]
                min-[425px]:py-20
                md:py-24
                lg:py-28">

  <div class="relative
              z-10
              flex
              flex-col
              gap-14
              min-[425px]:gap-16
              md:gap-20
              w-full
              max-w-[1440px]
              mx-auto">


    <!-- HEADER -->
    <div class="flex
                flex-col
                items-center
                gap-2
                w-full">

      <span class="text-xs
                   min-[375px]:text-[13px]
                   min-[425px]:text-sm
                   text-[#9aaa00]
                   font-medium
                   tracking-[1.5px]
                   text-center">

        Pensadores da Psicologia

      </span>


      <h3 class="text-[24px]
                 min-[375px]:text-[26px]
                 min-[425px]:text-[28px]
                 md:text-[32px]
                 lg:text-[30px]
                 min-[1440px]:text-[34px]
                 text-zinc-900
                 font-cormorant
                 text-center
                 leading-tight">

        Reflexões que

        <span class="text-[#9aaa00]">
          atravessam gerações.
        </span>

      </h3>


      <p class="text-[13px]
                min-[375px]:text-sm
                md:text-[15px]
                text-zinc-500
                text-center
                leading-relaxed
                max-w-xl">

        Frases de grandes pensadores da psicologia que nos lembram da
        importância do autoconhecimento, das emoções e do cuidado com a mente.

      </p>

    </div>


    <!-- PENSADORES -->
    <div class="grid
                grid-cols-1
                md:grid-cols-2
                lg:grid-cols-3
                gap-y-14
                md:gap-x-12
                lg:gap-x-16
                min-[1440px]:gap-x-20
                w-full">

      <?php foreach ($thinkers as $index => $thinker) { ?>

        <article class="relative
                        flex
                        flex-col
                        min-h-[250px]
                        min-[425px]:min-h-[270px]
                        lg:min-h-[280px]">


          <!-- NÚMERO -->
          <span class="absolute
                       top-0
                       right-0
                       text-[62px]
                       min-[425px]:text-[68px]
                       lg:text-[74px]
                       font-cormorant
                       leading-none
                       text-zinc-100
                       select-none
                       pointer-events-none">

            <?= str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT) ?>

          </span>


          <!-- AUTOR -->
          <div class="relative
                      z-10
                      pr-14">

            <div class="thinker-glass">


              <!-- INICIAIS -->
              <span class="thinker-initials">

                <?= htmlspecialchars($thinker['initials']) ?>

              </span>


              <!-- INFORMAÇÕES -->
              <div class="thinker-info">

                <h3 class="thinker-name">

                  <?= htmlspecialchars($thinker['name']) ?>

                </h3>


                <p class="thinker-role">

                  <?= htmlspecialchars($thinker['role']) ?>

                </p>

              </div>

            </div>

          </div>


          <!-- CITAÇÃO -->
          <div class="relative
                      z-10
                      flex
                      flex-col
                      mt-9
                      min-[425px]:mt-10">

            <span class="font-cormorant
                         text-[48px]
                         min-[425px]:text-[56px]
                         leading-[0.45]
                         text-[#b6c737]/55
                         select-none">

              “

            </span>


            <blockquote class="mt-3
                               max-w-[420px]
                               text-[14px]
                               min-[375px]:text-[15px]
                               min-[1440px]:text-[16px]
                               italic
                               text-zinc-700
                               leading-[1.75]">

              <?= htmlspecialchars($thinker['quote']) ?>

            </blockquote>

          </div>


          <!-- LABEL -->
          <div class="relative
                      z-10
                      flex
                      items-center
                      gap-2
                      mt-auto
                      pt-7">

            <span class="w-1.5
                         h-1.5
                         rounded-full
                         bg-[#9aaa00]">
            </span>


            <span class="text-[9px]
                         min-[375px]:text-[10px]
                         uppercase
                         tracking-[1.4px]
                         text-zinc-400
                         font-medium">

              Pensamento & Psicologia

            </span>

          </div>

        </article>

      <?php } ?>

    </div>

  </div>

</section>