namespace CKUT.Core.Services.Ch5.Models
{
    public class Rest : IFalling
    {
        public bool isFalling()
        {
            return false;
        }

        public bool isRest()
        {
            return true;
        }

        public void MoveHorizontal()
        {
            //move logic for rest
        }
    }
}