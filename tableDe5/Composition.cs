using System;

namespace tableDe5
{
    class Composition
    {
        public static void ComposerTableDe5(ref string resultat)
        {
            for(int n=1; n <= 100; n++){
                int valeur = n*5;
                resultat = resultat + "," + valeur;
            }
        }
    }
}
