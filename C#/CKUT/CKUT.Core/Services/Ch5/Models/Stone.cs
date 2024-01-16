namespace CKUT.Core.Services.Ch5.Models
{
    public class Stone : Tile
    {
        public bool IsStone()
        {
            return true;
        }

        public bool IsFallingStone()
        {
            return false;
        }

        public bool IsAir()
        {
            return false;
        }

        public bool IsBox()
        {
            return false;
        }

        public bool IsFallingBox()
        {
            return false;
        }
        
        public void MoveHorizontal()
        {
            //Move logic for stone
        }
    }
}