!Input file for the anaddb code. Analysis of the SiO2 DDB                       

!Flags
 ifcflag   1     ! Interatomic force constant flag

!Wavevector grid number 1 (coarse grid, from DDB)
  brav    2      ! Bravais Lattice : 1-S.C., 2-F.C., 3-B.C., 4-Hex.)
  ngqpt   3*6    ! Monkhorst-Pack indices
  nqshft  1      ! number of q-points in repeated basic q-cell
  q1shft  3*0.0

!Effective charges
     asr   2     ! Acoustic Sum Rule. 1 => imposed asymetrically
  chneut   1     ! Charge neutrality requirement for effective charges.

!Interatomic force constant info
  dipdip  1      ! Dipole-dipole interaction treatment

!Phonon band structure output for band2eps - See note near end for
! dealing with gamma LO-TO splitting issue.
   eivec  1

!Wavevector list number 1 (Reduced coordinates and normalization factor)         
  nph1l   141     ! number of phonons in list 1                             

  qph1l   0.0000  0.0000  0.0000   1.0    !(gamma point)
          0.01875 0.01875 0.0375   1.0
          0.0375  0.0375  0.0750   1.0
          0.05625 0.05625 0.1125   1.0
          0.0750  0.0750  0.1500   1.0
          0.09375 0.09375 0.1875   1.0
          0.1125  0.1125  0.2250   1.0
          0.13125 0.13125 0.2625   1.0
          0.1500  0.1500  0.3000   1.0
          0.16875 0.16875 0.3375   1.0
          0.1875  0.1875  0.3750   1.0
          0.20625 0.20625 0.4125   1.0
          0.2250  0.2250  0.4500   1.0
          0.24375 0.24375 0.4875   1.0
          0.2625  0.2625  0.5250   1.0
          0.28125 0.28125 0.5625   1.0
          0.3000  0.3000  0.6000   1.0
          0.31875 0.31875 0.6375   1.0
          0.3375  0.3375  0.6750   1.0
          0.35625 0.35625 0.7125   1.0
          0.3750  0.3750  0.7500   1.0    !(K point)
          0.38125 0.38125 0.7625   1.0
          0.3875  0.3875  0.7750   1.0
          0.39375 0.39375 0.7875   1.0
          0.4000  0.4000  0.8000   1.0
          0.40625 0.40625 0.8125   1.0
          0.4125  0.4125  0.8250   1.0
          0.41875 0.41875 0.8375   1.0
          0.4250  0.4250  0.8500   1.0
          0.43125 0.43125 0.8625   1.0
          0.4375  0.4375  0.8750   1.0
          0.44375 0.44375 0.8875   1.0
          0.4500  0.4500  0.9000   1.0
          0.45625 0.45625 0.9125   1.0
          0.4625  0.4625  0.9250   1.0
          0.46875 0.46875 0.9375   1.0
          0.4750  0.4750  0.9500   1.0
          0.48125 0.48125 0.9625   1.0
          0.4875  0.4875  0.9750   1.0
          0.49375 0.49375 0.9875   1.0
          0.5000  0.5000  1.0000   1.0    !(X point)
          0.525   0.525   1.0000   1.0
          0.5500  0.5500  1.0000   1.0
          0.575   0.575   1.0000   1.0
          0.6000  0.6000  1.0000   1.0
          0.625   0.625   1.0000   1.0
          0.6500  0.6500  1.0000   1.0
          0.675   0.675   1.0000   1.0
          0.7000  0.7000  1.0000   1.0
          0.725   0.725   1.0000   1.0
          0.7500  0.7500  1.0000   1.0
          0.775   0.775   1.0000   1.0
          0.8000  0.8000  1.0000   1.0
          0.825   0.825   1.0000   1.0
          0.8500  0.8500  1.0000   1.0
          0.875   0.875   1.0000   1.0
          0.9000  0.9000  1.0000   1.0
          0.925   0.925   1.0000   1.0
          0.9500  0.9500  1.0000   1.0
          0.975   0.975   1.0000   1.0
          1.0000  1.0000  1.0000   1.0    !(gamma point)
          0.975   0.975   0.975    1.0
          0.9500  0.9500  0.9500   1.0
          0.925   0.925   0.925    1.0
          0.9000  0.9000  0.9000   1.0
          0.875   0.875   0.875    1.0
          0.8500  0.8500  0.8500   1.0
          0.825   0.825   0.825    1.0
          0.8000  0.8000  0.8000   1.0
          0.775   0.775   0.775    1.0
          0.7500  0.7500  0.7500   1.0
          0.725   0.725   0.725    1.0
          0.7000  0.7000  0.7000   1.0
          0.675   0.675   0.675    1.0
          0.6500  0.6500  0.6500   1.0
          0.625   0.625   0.625    1.0
          0.6000  0.6000  0.6000   1.0
          0.575   0.575   0.575    1.0
          0.5500  0.5500  0.5500   1.0
          0.525   0.525   0.525    1.0
          0.5000  0.5000  0.5000   1.0    !(L point)
          0.5000  0.475   0.5000   1.0
          0.5000  0.4500  0.5000   1.0
          0.5000  0.425   0.5000   1.0
          0.5000  0.4000  0.5000   1.0
          0.5000  0.375   0.5000   1.0
          0.5000  0.3500  0.5000   1.0
          0.5000  0.325   0.5000   1.0
          0.5000  0.3000  0.5000   1.0
          0.5000  0.275   0.5000   1.0
          0.5000  0.2500  0.5000   1.0
          0.5000  0.225   0.5000   1.0
          0.5000  0.2000  0.5000   1.0
          0.5000  0.175   0.5000   1.0
          0.5000  0.1500  0.5000   1.0
          0.5000  0.125   0.5000   1.0
          0.5000  0.1000  0.5000   1.0
          0.5000  0.075   0.5000   1.0
          0.5000  0.0500  0.5000   1.0
          0.5000  0.025   0.5000   1.0
          0.5000  0.0000  0.5000   1.0    !(X point)
          0.5000  0.0125  0.5125   1.0
          0.5000  0.0250  0.5250   1.0
          0.5000  0.0375  0.5375   1.0
          0.5000  0.0500  0.5500   1.0
          0.5000  0.0625  0.5625   1.0
          0.5000  0.0750  0.5750   1.0
          0.5000  0.0875  0.5875   1.0
          0.5000  0.1000  0.6000   1.0
          0.5000  0.1125  0.6125   1.0
          0.5000  0.1250  0.6250   1.0
          0.5000  0.1375  0.6375   1.0
          0.5000  0.1500  0.6500   1.0
          0.5000  0.1625  0.6625   1.0
          0.5000  0.1750  0.6750   1.0
          0.5000  0.1875  0.6875   1.0
          0.5000  0.2000  0.7000   1.0
          0.5000  0.2125  0.7125   1.0
          0.5000  0.2250  0.7250   1.0
          0.5000  0.2375  0.7375   1.0
          0.5000  0.2500  0.7500   1.0    !(W point)
          0.5000  0.2625  0.7375   1.0
          0.5000  0.2750  0.7250   1.0
          0.5000  0.2875  0.7125   1.0
          0.5000  0.3000  0.7000   1.0
          0.5000  0.3125  0.6875   1.0
          0.5000  0.3250  0.6750   1.0
          0.5000  0.3375  0.6625   1.0
          0.5000  0.3500  0.6500   1.0
          0.5000  0.3625  0.6375   1.0
          0.5000  0.3750  0.6250   1.0
          0.5000  0.3875  0.6125   1.0
          0.5000  0.4000  0.6000   1.0
          0.5000  0.4125  0.5875   1.0
          0.5000  0.4250  0.5750   1.0
          0.5000  0.4375  0.5625   1.0
          0.5000  0.4500  0.5500   1.0
          0.5000  0.4625  0.5375   1.0
          0.5000  0.4750  0.5250   1.0
          0.5000  0.4875  0.5125   1.0
          0.5000  0.5000  0.5000   1.0    !(L point)

!Wavevector list number 2 (Cartesian directions for non-analytic gamma phonons)

!The output for this calculation must be cut-and-pasted into the
! t59_out.freq file to be used as band2eps input to get proper LO-TO 
! splitting at gamma.  Note that gamma occurrs twice.

  nph2l    1       ! number of directions in list 2

  qph2l   1.0  0.0  0.0    0.0
# This line added when defaults were changed (v5.3) to keep the previous, old behaviour
  symdynmat 0
